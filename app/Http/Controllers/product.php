<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use App\Models\category;
use App\Models\brand;
use App\Models\item;
use App\Models\cart;
use App\Models\order;
use Illuminate\support\Facades\DB;
use Session;
use Carbon\Carbon;

class product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function addcart(Request $req)
    {

       if($req->session()->has('sname'))
       {    $qty=request('qty');
            
        // echo "$qty";
           $c = new cart;

           $c->productid=$req->item;
           $c->userid=session('sname')->id;
           $c->qty=$qty;
           $data=item::select('isprice')->where ('id','=',$req->item)->first();
    
           $price=$data->isprice*$qty;

           $c->qtyprice=$price;
        //    echo "$c";
           $c->save();
           echo "<script>alert('product added Successfully to the cart');window.location='/CHome';</script>";
       }
       else
       {
           return redirect('/Login');
       }
    }

    public function productdetails($id)
    {
        $data=item::find($id);
        return view('productdetails',['product'=>$data]);
    }

    public function Hproductdetails($id)
    {
        $data=item::find($id);
        return view('Hproductdetails',['product'=>$data]);
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cart::destroy($id);
    echo "<script>alert('Item removed Successfully from the cart');window.location='/cart';</script>";
    }

    // function cartlist(){
    //     $custid= CustomerModel::where('cmail','=', session('LoggedUser'))->first();
    //     $customerId=$custid->id;
    //     $data=DB::table('cart_models')
    //     ->join('book_models','cart_models.book_id','=','book_models.id') 
    //     ->where('cart_models.customer_id',$customerId)
    //     ->select('cart_models.*')
    //     ->get();
 
    //     $total=$products=DB::table('cart_models')
    //      ->join('book_models','cart_models.book_id','=','book_models.id') 
    //      ->where('cart_models.customer_id',$customerId)
    //      ->sum('cart_models.qtyprice');
 
    //    $test = CartModel::with('book')
    //    ->join('book_models','cart_models.book_id','=','book_models.id') 
    //     ->where('cart_models.customer_id',$customerId)
    //     ->select('cart_models.*')
    //    ->get();
    
 
    //     return view('cartlist',['data'=>$data,'test'=>$test,'total'=>$total]);
    //  }

    function cartlist()
    {
        $userid=session::get('sname')['id'];
        $item2=DB::table('carts')
        ->join('items','carts.productid','=','items.id')
        ->where('carts.userid',$userid)
        ->select('items.*','carts.id as cart_id')
        ->get();

        $total=$products=DB::table('carts')
        ->join('items','carts.productid','=','items.id')
        ->where('carts.userid',$userid)
        ->sum('carts.qtyprice');

         $item = cart::with('cart')
         ->join('items','carts.productid','=','items.id')
         ->where('carts.userid',$userid)
         ->select('carts.*')
         ->get();


         return view('cart',['item'=>$item,'total'=>$total]);
    }


    public function addtocart(Request $request)
    {
        $data = Login::where('email','=', session('sname'))->first();
       if($request->session()->has('sname'))
       {
           $cart=new cart;

           $getQty= request('qty');

           $cart->qty=$getQty;

           $cart->customer_id=$data->id;
           $cart->book_id=$request->book_id;

           $data=BookModel::select('bprice')->where ('id','=',$request->book_id)->first();
           $price=$data->bprice*$getQty;

           $cart->qtyprice=$price;


          
           $cart->save();
           return redirect('/customerbook');
       }
       else{
        return redirect('/login');
       }
    }

    function payment()
{
    $userid=session::get('sname')['id'];
    $total=$products=DB::table('carts')
    ->join('items','carts.productid','=','items.id')
    ->where('carts.userid',$userid)
    ->sum('carts.qtyprice');
    // echo "$total";
    
    return view('payment',['total'=>$total]);
    
}

public function order(Request $request)
    {
        $userId=session::get('sname')['id'];
        $carts=DB::table('carts')
        ->where('userid','=',$userId)->get();
        
        $cdate = Carbon::now();
        $odate=$cdate->toDateString();
        foreach($carts as $cart)
        {
            $products=DB::table('items')
            ->where('id','=',$cart->productid)->get();
            foreach($products as $product)
            {
                $order=new order();
                $order->cid=$userId;
                $order->proid=$cart->productid;
                $order->oqty=$cart->qty;
                $order->oprice=$product->isprice;
                $order->ototal=($cart->qty)*($product->isprice);
                $order->odate=$cdate;
                $order->save(); 
                
                DB::table('items')
                ->where('id', $cart->productid)
                ->update(['istock' => ($product->istock-$cart->qty)]);

                DB::table('carts')->delete($cart->id);
            }
        }
        return redirect('/CHome');
    }

    //  function checkout()
    //  {
    //     $userid=session::get('sname')['id'];
    //     $item=DB::table('carts')
    //     ->join('items','carts.productid','=','items.id')
    //     ->where('carts.userid',$userid)
    //     ->select('items.*','carts.id as cart_id')
    //     ->get();
    //     $total=$item=DB::table('carts')
    //     ->join('items','carts.productid','=','items.id')
    //     ->where('carts.userid',$userid)
    //     ->sum('items.isprice');
        
        // print_r($item);
        // echo $total;
        // return view('checkout',compact('total','item'));

        // $userid1=session::get('sname')['id'];
        // $item1=DB::table('carts')
        // ->join('items','carts.productid','=','items.id')
        // ->where('carts.userid',$userid1)
        // ->select('items.*','carts.id as cart_id')
        // ->get();

        // $i=$item1["iname"];
        // echo $i;


        
      
        // return view('cart',['item'=>$item]);
       

    //    $item1= cart::join('items','carts.productid','=','items.id')
    //      ->where('carts.userid',$userid1)
    //      ->select(
    //               'items.iname' 
                 
    //       )
    //      ->get();
       
                
        //   echo "$item1[0]";
        //  return view('checkout',compact('total','item1'));
    //  }
}


