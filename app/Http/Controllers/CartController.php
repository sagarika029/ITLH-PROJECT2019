<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyCart;

use Auth;

use DB;

use App\User;
use App\MyProduct;


class CartController extends Controller
{
    public function addCart(Request $request)
    {
     $request->validate([
            'user_id' => 'required|unique:users'
        ]);
      $user_id=$request->user_id;
    	$name=$request->name;
    	$quantity=$request->quantity;
    	$size= $request->size;
    	$price=$request->price;

    	$cart= new MyCart();
      $cart->user_id=$user_id;
    	$cart->name=$name;
    	$cart->quantity = $quantity;
    	$cart->size = $size;
    	$cart->price = $price;
    	$cart->save();

    	 \Session::flash('success','Register Successfully');
    return redirect()->back();


 }

 public function addtocart(Request $request)
{   

    $data=$request->all();

    $product_id = $request->product_id;
    $quantity = MyProduct::where('id',$product_id)->first()->quantity;
    if($quantity < $request->quantity){
        Session()->flash('No Quantity Available');
        return redirect()->back();
    }
    DB::table('carts')->insert(['name'=>$data['name'],
          'quantity'=>$data['quantity'],
          'size'=>$data['size'],
           'price'=>$data['price'],
            'user_id'=>Auth::User()->id
       ]);
    return redirect()->back();
     $carts->save();
   
}

  public function cartPage()
 {
   $shoes = MyCart::all();
  return view('cart')->with(['shoes'=>$shoes]);
 }
 public function removeshoe($id)
{
    $shoes= MyCart::find($id)->delete();
     return redirect()->back();
}
public function orderReview(Request $request){
    $user_id=Auth::User()->id;
    $userDetails = User::where('id',$user_id )->first();
    
    $shoes = MyCart::all();

      $data=$request->all();
       return view('orderReview')->with(compact('userDetails','shoes'));
    }


 }
