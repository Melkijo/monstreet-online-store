<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(){
        return view('auth.register');

    }

    public function registerPost(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = 1;
        $user->password =Hash::make( $request->password);

        $user->save();

        return back()->with("success", "Register Succesfull");

    }

    public function login(){
        return view('auth.login');

    }
    public function loginPost(Request $request){

        $credentials =[
            'email' => $request->email,
            'password' =>$request->password,
        ];
        if(Auth::attempt($credentials)){
            if (auth()->user()->type == 'admin') {
            return redirect('/admin');

                // return redirect()->route('admin.admin');
            }else{
            return redirect('/user');
                // return redirect()->route('/user')->with('success', "login berhasil");
            }
            // return redirect('/user')->with('success', "login berhasil");
        }
        

        return back() ->with('error', "email or password wrong");

    }

    public function logout(){
       //remove cart session
         session()->forget('cart');
       Auth::logout();
       return redirect('login');

    }
}
