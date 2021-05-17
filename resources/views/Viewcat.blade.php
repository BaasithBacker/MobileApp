@extends('theme2')


@section('content')
<div class="container">

<div class="row">


    <div class="col-lg-12">
        <table class="table ">
            <tr>
                <th>CATAGORY-NAME</th>
                <th>DESCRIPTION</th>
                
                <th>UPDATE </th>
                {{-- <th>DELETE </th> --}}
            </tr>
            @foreach($c as $i)
            {{ csrf_field() }}
            <tr>
                <td>{{ $i->name }}</td>
                <td>{{ $i->desc }}</td>
  
                <td><a class="btn btn-warning" href={{"/editcat/".$i->id}}>EDIT</a></td>
                {{-- <td><a class="btn btn-danger"  href={{"/deletecat/".$i->id}}>DELETE</a></td> --}}
            
            </tr>
            
            @endforeach
            
            </table>

    </div>


</div>


</div>


    @endsection