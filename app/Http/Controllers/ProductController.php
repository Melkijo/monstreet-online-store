<?php

namespace App\Http\Controllers;

use App\Models\OrdersHistory;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request):View
    {

        if($request->filled('search')){
            $products = Product::search($request->search)->paginate(8);
        }else{
            $products= Product::latest()->paginate(8);
        }
        return view('index',compact('products'));
    }
    public function showAdmin(): View
    {
        $products = Product::latest()->paginate(7);
        return view('admin.products', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-product');
    }

    

    /**
     * Store a newly created resource in storage.
     */


     public function removeFromCart( $id){
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', json_encode($id) );
    }

    

     public function clearCart(){
        session()->forget('cart');
        return redirect()->back()->with('success', 'Cart cleared successfully');
     }

     public function checkout(){
        $id = auth()->user()->id;
        $cart = session()->get('cart');

        $titlesAndPrices = [];
        $total = 0;
        foreach ($cart as $item) {
            $title = $item['title'];
            $price = $item['price'];
            $quantity = $item['quantity'];
            $titlesAndPrices[] = [
                'title' => $title,
                'price' => $price,
                'quantity' => $quantity,
            ];

            $total += $price;
        }

        $order = [
            'user_id' => $id,
            'total' => $total,
            'cart' =>  json_encode($titlesAndPrices)  ,
        ];
        OrdersHistory::create($order);
        session()->forget('cart');
        return view('user.user');
     }

     public function adminOrdersHistory(){
        $orders = OrdersHistory::latest()->paginate(7);
        return view('admin.orders-history', [
            'orders' => $orders,
        ]);
     }


  

     public function addToCart(Request $request){
        $id = $request->id;
        $product = Product::find($id);
        $cart = session()->get('cart');
        if(!$cart){
            $cart = [
                $id => [
                    "title" => $product->title,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image,
                    'type' => $product->type,
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        $cart[$id] = [
            "title" => $product->title,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image,
            'type' => $product->type,
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
     }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric', // Add validation for price
            'stock' => 'required|numeric', // Add validation for stock
        ]);
    
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    
        $productData = [
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $imageName,
            'price' => $request->price,
            'stock' => $request->stock,
            'type' => 'local',
        ];
    
        Product::create($productData);
        return redirect(route('admin.products')) -> with('success','Product created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    
        return view('pages.product', [
            'product' => Product::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    { 
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            
            // Delete the old image if needed (optional)
            if ($product->image) {
                unlink(public_path('images/' . $product->image));
            }
            
            $product->image = $imageName;
        }
        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        
        return redirect()->route('admin.products')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('admin.products')
                        ->with('success','Product deleted successfully');
    }
}
