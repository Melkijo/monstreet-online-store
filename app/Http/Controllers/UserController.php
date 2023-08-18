<?php

namespace App\Http\Controllers;

use App\Models\OrdersHistory;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view ('user.user');
    }

    public function profile(){
        return view ('user.profile');
    }

    public function profileEdit(Request $request,  $id){
        //find user with same $id as the one in the url
        $user = User::find($id);
        $user->update($request->all());
        
        return redirect()->route('profile')
                        ->with('success','Product updated successfully');
    }

    public function admin(){
        $totalUser = User::all()->count();
        $totalProduct = Product::all()->count();
        $totalOrder = OrdersHistory::all()->count();
        $totalRevenue = OrdersHistory::all()->sum('total');
        return view ('admin.admin',compact('totalUser','totalProduct','totalOrder','totalRevenue'));
    }

    public function users(){
        $users = User::latest()->paginate(7);
        return view('admin.users', [
            'users' => $users,
        ]);
    }

    public function userDestroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users')
                        ->with('success','User deleted successfully');
    }
}
