@extends('theme3')

@section('content')
<div class="signup-form">
<form action="/customereditprocess/{{ $customerview->id }}" method="post">
                  {{csrf_field()}}
		<h2 style="margin-left:600px;">Edit My Profile<span>.</span></h2>
		{{-- <p>Worker id : {{$customerview->id}}</p> --}}
		<hr>
        <div class="form-group">
        
        <input  type="text" class="form-control"  name="name"  style="background-color:#595858; color:white; width:800px;margin-left:400px;" value="{{$customerview->name}}" required>
        </div>
        <div class="form-group">
        
        <input type="text" class="form-control" name="address"  style="background-color:#595858; color:white;width:800px;margin-left:400px;" value="{{$customerview->address}}" required>
        </div>
		
        <div class="form-group">
        <input type="text" class="form-control"  name="pincode"  style="background-color:#595858; color:white;width:800px;margin-left:400px;" value="{{$customerview->pincode}}"required>
        </div>
        
        <div class="form-group">
            <button style="width:800px;margin-left:400px;" type="submit" class="btn btn-primary btn-block btn-lg">Update Details</button>
        </div>
		<div class="form-group">
             </div>
		<p class="small text-center" style="color:black;">By clicking the Update button, change will be reflected in <br><a href="#">Database &</a>.</p>
    </form>
    <a href="/profile" class="btn btn-danger" style="color:white;width:800px;margin-left:400px;" data-toggle="modal"><span>Cancel</span></a>	

@endsection





