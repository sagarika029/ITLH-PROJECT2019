<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyProduct;

use DB;

use Auth;

use App\User;

use App\MyCart;

class AddProduct extends Controller
{ 
    public function product(){
        if (Auth::user()->type !='admin')
    {
            return redirect()->route('undandy');
        }
        return view('addproduct');
    }

    public function addproduct(Request $request)
    {
    	$name= $request->name;
    	$quantity= $request->quantity;
    	$size= $request->size;
    	$price= $request->price;
    	$image= $request->image;
    	$description= $request->description;
        $file = $request->file('productImg');
        $filename = $file->getClientOriginalName();
        $uploadpath = 'public/assets/images/uploads';
        $filePath = '/public/assets/images/uploads/'.$filename;
        $file->move($uploadpath,$filename);

    	$product= new MyProduct();
    	$product->name = $name;
    	$product->quantity = $quantity;
    	$product->size = $size;
    	$product->price = $price;
    	$product->description= $description;
        $product->image=$filePath;
    	$product->save();
        return view('addproduct');
        }

 public function showProduct()
 {      
    $products = MyProduct::all();
    $shoes = MyProduct::all();
    if (Auth::user()->type=='admin')
    {
            return view('listofproducts')->with(['products'=>$products]);
        }
        else if (Auth::user()->type=='Customer')
        {
        return view('undandy')->with(['shoes'=>$shoes]);
    }
}

 public function shoe(Request $request)
 {
    $shoes = MyProduct::all();
    return view('shoe')->with(['shoes'=>$shoes]);
}
public function homePage(Request $request)
 {
    $shoes = MyProduct::all()->take(3);
    return view('undandy')->with(['shoes'=>$shoes]);
}

public function shoeDetails($id)
{
     $shoe = MyProduct::where('id',$id)->first();
     return view('shoeDetails')->with(['shoe'=>$shoe]);
}

 

public function editproduct($id){
    $product = MyProduct::where('id',$id)->first();
    return view('edit')->with(['product'=>$product]);
}

public function updateproduct(Request $request)
{

    if($request->isMethod('post')){
        $data =$request->all();

        MyProduct::where(['id'=>$data['id']])->update(['name'=>$data['name'],
          'quantity'=>$data['quantity'],'price'=>$data['price'],
            'description'=>$data['description']]);
            return redirect()->back()->with('flash_message_success','product has been updated successfully');

    }
}

public function deleteproduct($id)
{
    $product = MyProduct::find($id)->delete();
      return redirect()->back();
    
}

public function checkout(Request $request){
    $user_id=Auth::User()->id;
    $userDetails=User::find($user_id);
    if($request->isMethod('post')){
        $data=$request->all();
    }

    $userDetails->save();
    return view('checkout')->with(['userDetails'=>$userDetails]);
}
public function checkoutPage(Request $request)
{
    $data=$request->all();

    DB::table('order')->insert(['name'=>$data['name'],
          'address'=>$data['address'],
          'city'=>$data['city'],
           'state'=>$data['state'],
           'pincode'=>$data['pincode'],
           'number'=>$data['number']
       ]);
    return redirect('order-review');
    

        $order->save();

   
}


}
    