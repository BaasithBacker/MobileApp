@extends('theme3')


@section('content')
<div class="container">

<div class="row">


    <div class="col-lg-12">
        <table class="table ">
            <tr>
                <th>ORDERID</th>
                <th>PRODUCT NAME</th>
                <th>QUANTITY</th>
                <th>DATE</th>
                <th>PRICE</th>
                <th>TOTAL</th>
                
                <th>FEEDBACK </th>
                {{-- <th>DELETE </th> --}}
            </tr>
            @foreach($c as $i)
            {{ csrf_field() }}
            <tr>
                <td>{{ $i->id }}</td>
                <td>{{ $i->order->iname }}</td>
                <td>{{ $i->oqty }}</td>
                <td>{{ $i->odate }}</td>
                <td>{{ $i->oprice }}</td>
                <td>{{ $i->ototal }}</td>
  
                {{-- <td><a class="btn btn-primary" href={{"/feedback/".$i->id}}>ADD FEEDBACK</a></td> --}}
                {{-- <td><a class="btn btn-danger"  href={{"/deletecat/".$i->id}}>DELETE</a></td> --}}
            
            </tr>
            
            @endforeach
            
            </table>

    </div>


</div>


</div>


    @endsection