<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\MyProduct;

class Login extends Controller
{
    public function showProduct()
    { 

         return view('listofproducts');
    }

    public function undandy()
    {
        $shoes = MyProduct::all();
    return view('undandy')->with(['shoes'=>$shoes]);
    }


public function login(Request $request)
{    
    $email = $request['email'];
    $password =$request['password'];
    if (Auth::attempt(['email'=>$email,'password'=>$password]))
    {
        
        if (Auth::user()->type=='admin')
        {
            return redirect()->route('showProduct');
        }
        else if(Auth::user()->type=='Customer')
        {
            return redirect()->route('undandy');
        }
        else
        {
            \Session()->flash('alert-danger','Invalid username or password');
            return redirect()->route('login');
        }
    }
    else
    {
        \Session()->flash('alert-danger','Invalid username or password');
       
        return redirect()->back();
    }
}


public function logout()
{
    Auth::logout();
    return view('userloginform');
}
}
