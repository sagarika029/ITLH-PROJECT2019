 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('undandy');
});

Route::get('/undandy', function () {
    return view('undandy');
});
Route::get('/undandy' , [
    'uses' => 'login@undandy',
     'as' => 'undandy' 
 ]);
Route::get('/nav', function () {
    return view('nav');
});

Route::get('/readmore', function () {
    return view('readmore');
});

Route::get('/readmore1', function () {
    return view('readmore1');
});


Route::get('/DesignYours', function () {
    return view('DesignYours');
});
Route::get('/shoe', function () {
    return view('shoe');
});

Route::get('/shoe','AddProduct@shoe');

Route::get('/','AddProduct@homePage');

Route::get('/shoeDetails/{id}','AddProduct@shoeDetails');


Route::get('/undandyworld', function () {
    return view('undandyworld');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/listofproducts', function () {
    return view('listofproducts');
});
Route::get('/listofproducts' , [
    'uses' => 'login@listofproducts',
     'as' => 'listofproducts' 
 ]);
Route::get('/showProduct','AddProduct@showProduct');

Route::get('/showProduct' , [
    'uses' => 'AddProduct@showProduct',
     'as' => 'showProduct' 
 ]);

Route::get('/product',[
        'uses'=>'AddProduct@product',
        'as'=> 'product',
        'middleware' => 'auth'
    ]);

Route::get('/addproduct', function () {
    return view('addproduct');
});

Route::post('/addproduct' , [
    'uses' => 'AddProduct@addproduct',
     'as' => 'addproduct' 
 ]);

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/editproduct/{id}' , [
    'uses' => 'AddProduct@editproduct',
     'as' => 'editproduct' 
 ]);

Route::get('/deleteproduct/{id}' , [
    'uses' => 'AddProduct@deleteproduct',
     'as' => 'deleteproduct' 
 ]);

Route::post('/updateproduct' , [
    'uses' => 'AddProduct@updateproduct',
     'as' => 'updateproduct' 
 ]);

Route::get('/productdetailspage', function () {
    return view('productdetailspage');
});

Route::get('/details' , 'AddProduct@details');

Route::get('/details' , 'AddProduct@details');

Route::get('/userregistrationform', function () {
    return view('userregistrationform');
});

Route::get('/userloginform', function () {
    return view('userloginform');
});

Route::post('/register' , [
    'uses' => 'UserRegistration@register',
     'as' => 'register' 
 ]);

//Route::post('/login', 'UserRegistration@login');

Route::post('/login' , [
    'uses' => 'Login@login',
     'as' => 'login' 
 ]);

Route::get('/logout' , [
    'uses' => 'Login@logout',
     'as' => 'logout' 
 ]);

 Route::get('/cart', function () {
   return view('cart');
 });

//Route::match(['get' , 'post'] ,'/add-cart', 'CartController@addtocart');
Route::post('/add-cart' , [
    'uses' => 'CartController@addtocart',
     'as' => 'add-cart',
     'middleware' => 'auth'
 ]);

Route::get('/cartPage','CartController@cartPage');
Route::get('/cart','CartController@cartPage');

Route::get('/removeshoe/{id}' , [
    'uses' => 'CartController@removeshoe',
     'as' => 'removeshoe' 
 ]);
//Checkout Page

Route::match(['get' , 'post'] ,'/checkoutPage', 'AddProduct@checkoutPage');
Route::match(['get' , 'post'] ,'/checkout', 'AddProduct@checkout');

//Order Review
Route::get('/orderReview', function () {
    return view('orderReview');
});

Route::match(['get' , 'post'] ,'/order-review', 'CartController@orderReview');

Route::match(['get' , 'post'] ,'/place-order', 'OrderController@placeOrder');

//confirm order
Route::get('/confirm', function () {
    return view('confirm');
});






 