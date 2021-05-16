@extends('theme2')

@section('content')

<form action="/itemprocess/{{ $item->id }}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}
    
    <table class="table">
    
        {{-- <tr>
            <td> CATEGORY </td>
            <td>
             <input value="{{   $item->cid }}" name="cid" type="text" class="form-control">
            </td>
        </tr>
        <tr>
            <td> BRAND </td>
            <td>
             <input value="{{   $item->bid }}" name="bid" type="text" class="form-control">
            </td>
        </tr> --}}
        

     <tr>
         <td> MODEL </td>
         <td>
          <input value="{{   $item->imodel }}" name="model" type="text" class="form-control">
         </td>
     </tr>
     <tr>
         <td>NAME</td>
         <td>      <input value="{{   $item->iname}}" name="name" type="text" class="form-control">
    </td>
     </tr>
     <tr>
         <td>SIZE</td>
         <td>      <input value="{{   $item->isize}}" name="size" type="text" class="form-control">
    </td>
     </tr>
     <tr>
         <td>COLOR </td>
         <td>      <input value="{{   $item->icolor}}" name="color" type="text" class="form-control">
    </td>
     </tr>
     <tr>
         <td>DESCRIPTION</td>
         <td>       <input value="{{   $item->idesc}}" name="desc" type="text" class="form-control">
    </td>
     </tr>
     <tr>
         <td>STOCK</td>
         <td>      <input value="{{   $item->istock }}" name="stock" type="text" class="form-control">
    </td>
     </tr>
     <tr>
         <td>SELLING PRICE </td>
         <td>      <input value="{{   $item->isprice }}" name="sprice" type="text" class="form-control">
    </td>
     </tr>

     <tr>
        <td>COST PRICE </td>
        <td>      <input value="{{   $item->icprice }}" name="cprice" type="text" class="form-control">
   </td>
    </tr>

    <tr>
        <td>IMAGE </td>
        <td>      <input value="{{   $item->image }}" name="image" type="file" class="form-control">
   </td>
    </tr>
    
     <tr>
         <td></td>
         <td> <button class="btn btn-success"> SUBMIT </button></td>
     </tr>
    </table>
    
    
    </form>

    @endsection