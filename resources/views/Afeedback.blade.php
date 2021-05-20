@extends('theme2')


@section('content')
<div class="container">

<div class="row">


    <div class="col-lg-12">
        <table class="table ">
            <tr>
                <th>NAME</th>
                <th>ORDER ID</th>
                <th>COMMENT</th>
   
                
                {{-- <th>UPDATE </th> --}}
                {{-- <th>DELETE </th> --}}
            </tr>
            @foreach($item as $i)
            {{ csrf_field() }}
            <tr>
                <td>{{ $i->cname }}</td>
                <td>{{ $i->oid }}</td>
                <td>{{ $i->comments }}</td>
 
  
                {{-- <td><a class="btn btn-warning" href={{"/editbrand/".$i->id}}>EDIT</a></td> --}}
                {{-- <td><a class="btn btn-danger"  href={{"/deletecat/".$i->id}}>DELETE</a></td> --}}
            
            </tr>
            
            @endforeach
            
            </table>

    </div>


</div>


</div>


    @endsection