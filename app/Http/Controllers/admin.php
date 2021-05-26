<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\brand;
use App\Models\item;
use App\Models\login;
use App\Models\feedback;
use App\Models\order;


class admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function getbrand(Request $req)
    // {
    //     $brand = brand::all();
    //     echo $brand;
   
    // }


    public function index()
    {
        $categorydata = category::all();
        $brand = brand::all();
        return view ('AItem',compact('categorydata','brand'));
    }


    // public function index1()
    // {

    //     $categorydata = category::all();
    //     return view ('AItem',compact('categorydata'));
    // }
    


    // public function index2()
    // {
    //     $data = ['brand'=>brand::all()];
    //     return view ('AItem',$data);
    // }


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
        $cname=request('name');
        $desc=request('desc');

        $this->validate($request,[
            'name'=>'required',
            'desc'=>'required'
        ]);

        $c = new category();

        $c->name=$cname;
        $c->desc=$desc;

        $c->save();
        echo "<script>alert('Successfully Added Category');window.location='/ACategory';</script>";
        // echo "success";

    }

    public function store1(Request $request)
    {
        $data=$request->input();
    //    print_r($data);
       
       
        
        $cname=$data['name'];
        $desc=$data['desc'];
        // $cid=$data['select'];
       
        $this->validate($request,[
            'name'=>'required',
            'desc'=>'required'
        ]);

        $c = new brand();

        // $c->cid=$cid;
        $c->bname=$cname;
        $c->desc=$desc;

        $c->save();
        // return redirect('AHome');
        echo "<script>alert('Successfully Added Brand');window.location='/AHome';</script>";
        // echo "success";

    }

    public function storeitem(Request $req)
    {
        $data=$req->input();
        // print_r($data);
        // print_r($req->image);

        // $image=$req->image;
        // $img = Image::make($image)->resize(240, 253);
        // print_r($img);

        $cid=$data['select'];
        $bid=$data['brand1'];
        $imodel=$data['model'];
        $iname=$data['name'];
        $isize=$data['size'];
        $icolor=$data['color'];
        $idesc=$data['desc'];
        $istock=$data['stock'];
        $isprice=$data['sprice'];
        $icprice=$data['cprice'];
        $image=$req->file('image');
        $name=$image->getClientOriginalName();
        $image->move(public_path('assets/img/gallery'),$name); 

        $c = new item();

        $c->cid=$cid;
        $c->bid=$bid;
        $c->imodel=$imodel;
        $c->iname=$iname;
        $c->isize=$isize;
        $c->icolor=$icolor;
        $c->idesc=$idesc;
        $c->istock=$istock;
        $c->isprice=$isprice;
        $c->icprice=$icprice;
        $c->image=$name;
        echo "<script>alert('Successfully Added Item');window.location='/AHome';</script>";

        $c->save();
    }

    public function deleteview($id)
    {
        $item=item::find($id);
        return view('deleteitem',compact('item'));

    }

    public function destroyitem($id)
    {
        $item=item::find($id);

        $item->delete();

        return redirect('/viewitem');
    }


    public function viewcat()
    {
        $c=category::all();

        return view('Viewcat',compact('c'));
    }


    public function vieworder()
    {
        $item=order::all();

        return view('Viewreport',compact('item'));
    }

    public function viewitem()
    {
        $item=item::all();

        return view('Viewitem',compact('item'));
    }

    public function viewbrand()
    {
        $item=brand::all();

        return view('viewbrand',compact('item'));
    }

    public function viewcust()
    {
        $item=login::all();

        return view('viewcust',compact('item'));
    }

    public function editbrand($id)
    {
        $item=brand::find($id);
        return view('editbrand',compact('item'));
    }

    public function edititem($id)
    {
        $item=item::find($id);
        return view('edititem',compact('item'));

    }

    public function destroycat($id)
    {
        $item=category::find($id);

        $item->delete();

        return redirect('/viewcat');
    }

    public function deletecat($id)
    {
        $item=category::find($id);
        return view('deletecat',compact('item'));

    }
 

    public function editcat($id)
    {
        $item=category::find($id);
        return view('editcat',compact('item'));

    }


    public function updatecat(Request $request, $id)
    {
        $cname=request('name');
        $desc=request('desc');

        $this->validate($request,[
            'name'=>'required',
            'desc'=>'required'
        ]);

        $c = category::find($id);

        $c->name=$cname;
        $c->desc=$desc;

        $c->save();
        echo "<script>alert('Successfully Updated Category');window.location='/viewcat';</script>";
        // echo "success";

    }

    public function updatebrand(Request $request, $id)
    {
        $cname=request('name');
        $desc=request('desc');

        $this->validate($request,[
            'name'=>'required',
            'desc'=>'required'
        ]);

        $c = brand::find($id);

        $c->bname=$cname;
        $c->desc=$desc;

        $c->save();
        echo "<script>alert('Successfully Updated Brand');window.location='/viewbrand';</script>";
        // echo "success";

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


    public function updateitem(Request $req, $id)
    {
        $data=$req->input();

        $c=item::find($id);

        $cid=$data['select'];
        $bid=$data['brand1'];
        $imodel=$data['model'];
        $iname=$data['name'];
        $isize=$data['size'];
        $icolor=$data['color'];
        $idesc=$data['desc'];
        $istock=$data['stock'];
        $isprice=$data['sprice'];
        $icprice=$data['cprice'];
        $image=$req->file('image');
        $name=$image->getClientOriginalName();
        $image->move(public_path('assets/img/gallery'),$name); 

        
        $c->cid=$cid;
        $c->bid=$bid;
        $c->iname=$iname;
        $c->isize=$isize;
        $c->icolor=$icolor;
        $c->idesc=$idesc;
        $c->istock=$istock;
        $c->isprice=$isprice;
        $c->icprice=$icprice;
        $c->image=$name;
        echo "<script>alert('Successfully Updated Item');window.location='/AHome';</script>";

        $c->save();
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

    public function viewfeed()
    {
        $item=feedback::all();

        return view('Afeedback',compact('item'));
    }

    public function getreport()
    {
        $getdate1=request('date1');
        $getdate2=request('date2');
          
        $item=order::select('*')
        ->whereBetween('odate', [$getdate1, $getdate2])->get();
        
        return view('Viewreport',compact('item'));
    }
    
}
