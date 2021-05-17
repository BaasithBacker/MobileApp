@extends('theme2')

@section('content')

<form action="/catdelete/{{ $item->id }}" method="post" enctype="multipart/form-data">

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
        <td> <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger"> DELETE  </button></td>
    </tr>
    </table>
    
    
    </form>

    @endsection