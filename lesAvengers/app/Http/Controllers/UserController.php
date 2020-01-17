<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function getSingup(){
        return view('user.singup');
    }
    public function postSingup(Request $request){
         $this->validate(request(),[
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:4'
        ]);
        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user -> save();

        return redirect()->route('product.index');
    }
}

