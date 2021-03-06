<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginactivity;
use App\Http\Controllers\admin;
use App\Http\Controllers\customer;
use App\Http\Controllers\product;

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
// Route::get('/Login', function () {
//     return view('login');
// });
Route::get('/Contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/Register', function () {
    return view('register');
});

route::get('Hproductdetails/{id}',[product::class,'Hproductdetails']);


route::post('/productsearch1',[product::class,'getproduct1']);

route::get('/shop',[customer::class,'viewproduct']);


Route::post('/Register1',[loginactivity::class,'store']);


Route::get('/', function () {
    return view('index');
});

Route::get('/Login',[loginactivity::class,'login']);


Route::post('/Login1',[loginactivity::class,'check']);


route::get('/logout',function(){
    Session::forget('sname');
    return redirect('/index');
});

Route::group(['middleware'=>['LoginCheck']], function(){


// Route::get('/shop', function () {
//     return view('shop');
// });





// Route::get('/cart', function () {
//     return view('cart');
// });


// Route::get('/shop', function () {
//     return view('shop');
// });




Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/confirmation', function () {
    return view('confirmation');
});

Route::get('/elements', function () {
    return view('elements');
});



// Route::get('/product_details', function () {
//     return view('product_details');
// });








Route::get('/Category', function () {
    return view('category');
});


Route::get('/filter', function () {
    return view('filter');
});


Route::get('/blog', function () {
    return view('blog');
});


Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/CHome', function () {
    return view('CHome');
});

Route::get('/AHome', function () {
    return view('AHome');
});


Route::get('/theme2', function () {
    return view('theme2');
});

Route::get('/ACategory', function () {
    return view('ACategory');
});

Route::post('/ACategory1',[admin::class,'store']);

Route::post('/ABrand1',[admin::class,'store1']);



Route::get('/ABrand', function () {
    return view('ABrand');
});



Route::get('/AItem2',[admin::class,'index']);
    


// Route::get('/sessiondelete',function(){
//     if(session()->has('sname'))
//     {
//         session()->pull('sname');
//     }
//     return view('/index');
// });



Route::get('/index', function () {
    return view('index');
});

Route::post('/storeitem',[admin::class,'storeitem']);

route::get('/viewreport',[admin::class,'vieworder']);

route::get('/viewitem',[admin::class,'viewitem']);

route::get('/viewcat',[admin::class,'viewcat']);

route::get('/viewbrand',[admin::class,'viewbrand']);



route::get('/Cshop',[customer::class,'viewproduct1']);

route::get('/CHome',[customer::class,'viewproducthome']);


route::get('productdetails/{id}',[product::class,'productdetails']);




route::get('/edititem/{id}', [admin::class,'edititem']);
route::post('/itemprocess/{id}', [admin::class,'updateitem']);



route::get('/deleteitem/{id}', [admin::class,'deleteview']);

route::post('/itemdelete/{id}',[admin::class,'destroyitem']);

route::post('/addtocart',[product::class,'addcart']);

route::get('/cart',[product::class,'cartlist']);

route::get('removecart/{id}',[product::class,'destroy']);

route::get('checkout',[product::class,'payment']);


route::post('/order',[product::class,'order']);

route::get('/editcat/{id}', [admin::class,'editcat']);
route::post('/catprocess/{id}', [admin::class,'updatecat']);

route::get('/deletecat/{id}', [admin::class,'deletecat']);
route::post('/catdelete/{id}',[admin::class,'destroycat']);


route::get('/editbrand/{id}', [admin::class,'editbrand']);
route::post('/brandprocess/{id}', [admin::class,'updatebrand']);


route::get('/viewcust',[admin::class,'viewcust']);

route::get('/Corders',[product::class,'myorder']);

route::get('/feedback/{id}',[customer::class,'custVfeedback']);

route::post('/feedback1/{id}',[customer::class,'storecustVfeedback']);

route::get('/Afeedback',[admin::class,'viewfeed']);

route::get('/Areport',[admin::class,'viewfeed']);

route::get('/search',[product::class,'search']);

route::post('/report',[admin::class,'getreport']);

route::post('/productsearch',[product::class,'getproduct']);

route::get('/profile',[customer::class,'profile']);

route::get('/editprofile/{id}',[customer::class,'editprofile']);

route::post('/customereditprocess/{id}',[customer::class,'updateprofile']);

});