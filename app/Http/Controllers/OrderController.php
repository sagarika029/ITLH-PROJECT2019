<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\MyCart;
use App\MyOrder;
use Auth;
use DB;

class OrderController extends Controller
{
    public function Order(Request $request)
    {   
        $user_id=$request->user_id;
    	$name=$request->name;
    	$quantity=$request->quantity;

    	$address =$request->address;
    	$number =$request->number;
    	$city=$request->city;
    	$state= $request->state;
    	$pincode =$request->pincode;
    	$total_amount=$request->total_amount;

    	$order= new MyOrder();
        $order->user_id=$user_id;
    	$order->name=$name;
    	$order->quantity = $quantity;
    	$order->address = $address;
    	$order->number = $number;
    	$order->city = $city;
    	$order->state=$state;
    	$order->pincode= $pincode;

    	$order->save();

    	dd("added successfully");

 }


public function placeOrder(Request $request){

   $data=$request->all();
   dd($request->all());
    $user_id=Auth::User()->id;
    $userDetails = User::where('id',$user_id )->first();

    DB::table('order')->insert([
        'quantity'=>$data['quantity'],
          'price'=>$data['price'],
           'total_amount'=>$data['total_amount']
       ]);
      
         return redirect()->back();
         $order->save(); 
     
}

}
