<?php

namespace App\Http\Controllers;

use App\Models\OrdersHistory;
use Illuminate\Http\Request;

class OrdersHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $orderHistory = OrdersHistory::where('user_id', $userId)->latest()->paginate(7);
        return view('user.order-history', [
            'orders' => $orderHistory,
        ]);
    }

    public function getTotalRevenue(){
        $orders = OrdersHistory::all();
        $total = 0;
        foreach($orders as $order){
            $total += $order->total;
        }
        return $total;
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(OrdersHistory $ordersHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrdersHistory $ordersHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrdersHistory $ordersHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrdersHistory $ordersHistory)
    {
        // Remove the specified resource from storage using id
        $ordersHistory->delete();
        return redirect()->route('order-history')
                        ->with('success','Order deleted successfully');

    }
}
