@extends('theme3')

@section('content')

<form action="/feedback1/{{ $item->id }}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}
    
    <table class="table">
        
     <tr>
        <td> ORDER ID </td>
        <td>
            {{$item->id}}
         {{-- <input value="{{$item->id}} " name="comment" type="" class="form-control"> --}}
        </td>
    </tr>
        

     <tr>
         <td> COMMENT </td>
         <td>
          <input value=" " name="comment" type="text" class="form-control">
         </td>
     </tr>
    
     <tr>
         <td></td>
         <td> <button class="btn btn-success"> SUBMIT </button></td>
     </tr>
    </table>
    
    
    </form>

    @endsection