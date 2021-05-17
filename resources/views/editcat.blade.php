@extends('theme2')

@section('content')

<form action="/catprocess/{{ $item->id }}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}
    
    <table class="table">
    
        

     <tr>
         <td> NAME </td>
         <td>
          <input value="{{   $item->name }}" name="name" type="text" class="form-control">
         </td>
     </tr>
     <tr>
         <td>DESCRIPTION</td>
         <td>      <input value="{{   $item->desc}}" name="desc" type="text" class="form-control">
    </td>
     </tr>
     <tr>
         <td></td>
         <td> <button class="btn btn-success"> SUBMIT </button></td>
     </tr>
    </table>
    
    
    </form>

    @endsection