<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class loginactivity extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
        public function check(Request $request)
    {
        $uname=request('name');
        $upass=request('password');
      

        $this->validate($request,[
            'name'=>'required',
            'password'=>'required|min:5|max:15'
        ]);



        $u=login::select('email')->where('email','like',"$uname")->first();
        
        if(!$u)
        {
            echo "<script>alert('Something went Wrong,Invalid User');window.location='/Login';</script>";
        }
        else
        {
        //echo $u->mailid;
        $p=login::select('password')->where('email','like',"$u->email")->first();
        //echo $p->password;
        
        
            if($p->password == $upass)
            {
                $ut=login::select('usertype')->where('email','like',"$u->email")->first();
                //echo $ut->usertype;
                if($ut->usertype == 'customer')
                {
                    $i=login::select('name','id')->where('email','like',"$uname")->first();
                    $request->session()->put('sname',$i);
                //    echo "logined";
                //    echo session('sname')->id;
                   echo "<script>alert('Successfully Logined,Welcome');window.location='/CHome';</script>"; 
                }
                else if($ut->usertype=='admin')
                {
                    //echo "admin";
                    // $i=login::select('id')->where('id','like',"$id")->first();
                    // echo $i;
                    echo "<script>alert('Successfully Logined,Welcome');window.location='/AHome';</script>";
                
                }
                }
             else
            {
                echo "<script>alert('Something went Wrong,Invalid User');window.location='/Login';</script>";
            }
        }
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
        $uname = request('name');
        $uemail = request('email');
        $uaddress = request('address');
        $upin = request('pincode');
        $upass = request('password');
        $ucpass = request('confirmpassword');
        
        
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'pincode'=>'required',
            'password'=>'required|min:5|max:15',
            'confirmpassword'=>'required|min:5|max:15']);


            if($upass == $ucpass)
            {
                $l = new login();

                $l->name=$uname;
                $l->email=$uemail;
                $l->address=$uaddress;
                $l->pincode=$upin;
                $l->password=$upass;
                $l->usertype="customer";

                $l->save();
                return redirect('/Login');
                }
                 else
                 {
                echo "<script>alert('Password is not correct');window.location='/Register';</script>"; 
                }


        //echo "added successfully";
        

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
}
