<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use DB;

class UserRegistration extends Controller
{
    public function register(Request $request )
    {   
        $request->validate([
            'email' => 'required|unique:users'
        ]);
    	$name= $request->name;
    	$email =$request->email;
    	$password =$request->password;
    	$number =$request->number;
    	$address =$request->address;
    	$type = "Customer";
    	$city=$request->city;
    	$state= $request->state;
    	$pincode =$request->pincode;
    	$landmark =$request->landmark;

    	$user = new User();
    	$user->name = $name;
    	$user->email = $email;
    	$user->password = bcrypt($password);
    	$user->number = $number;
    	$user->address = $address;
    	$user->city = $city;
    	$user->state=$state;
    	$user->pincode= $pincode;
    	$user->type = $type;
    	$user->landmark = $landmark;
    	$user->save();
    
    \Session::flash('success','Register Successfully');
    return redirect('userloginform');
}




/*public function login(Request $request)
{  
    print_r($request->input());
    //return false;
    $name = $request->input('name');
    $password =$request->input('password');
    $data= DB::select('select id from users where name=? and password=?', [$name,$password]);
    //print_r($data);
    
    if(count($data))
    {
        echo "hey man, u r logged in";

    }

    else
    {
        echo "failed to log in";
    }

}

    /*$user = new User();
    $user->name = $name;
    $user->password = bcrypt($password);
    $user->save();
    return redirect()->back();*/

}



