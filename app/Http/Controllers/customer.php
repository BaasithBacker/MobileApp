<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\brand;
use App\Models\item;
use App\Models\order;
use App\Models\feedback;
use App\Models\login;
use Session;

class customer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profile()
    {
        // $data = ['LoggedUserInfo'=>login::where('name','=', session('sname'))->first()];
        $data = session::get('sname')['id'];
        $var = ['var'=>login::where('id','=',$data)->first()];
    
        return view ('profile')->with($var);
    }

    public function editprofile($id)
    {
        $customerview=login::find($id);

        return view('editprofile',compact('customerview'));
    }


    public function updateprofile(Request $request, $id)
    {
        $l = login::find($id);
        $uname = request('name');
        $uaddress = request('address');
        $upin = request('pincode');

        

        $l->name=$uname;
        $l->address=$uaddress;
        $l->pincode=$upin;
        $l->save();

        return redirect('/profile');
    }


    public function viewproduct()
    {
        $item=item::all();

        return view('shop',['shops'=>$item]);
        
    }

    public function viewproduct1()
    {
        $item=item::all();

        return view('Cshop',['shops'=>$item]);
        
    }

    public function viewproducthome()
    {
        $item=item::all();

        return view('CHome',['CHome'=>$item]);
        
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
        //
    }

    public function custVfeedback($id)
    {
        $item=order::find($id);
        return view('feedback',compact('item'));
    }

    public function storecustVfeedback($id , Request $request)
    {
        $getcom=request('comment');

        $f=new feedback();

        $f->cname=session('sname')->name;
        $f->oid=$id;
        $f->comments=$getcom;

        $f->save();
        return redirect('/Corders');
    }
}
