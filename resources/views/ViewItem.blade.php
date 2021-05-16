@extends('theme2')


@section('content')
<div class="container">

<div class="row">


    <div class="col-lg-12">
        <table class="table ">
            <tr>
                <th>CATAGORY</th>
                <th>BRAND</th>
                <th>MODEL</th>
                <th>ITEM-NAME</th>
                <th>ITEM-SIZE </th>
                <th>ITEM-COLOR</th>
                <th>ITEM-DESC</th>
                <th>ITEM-STOCK</th>
                <th>ITEM-SELLINGPRICE</th>
                <th>ITEM-COSTPRICE</th>
                <th>ITEM-IMAGE</th>
                <th>UPDATE </th>
                <th>DELETE </th>
            </tr>
            @foreach($item as $i)
            <tr>
                <td>{{ $i->cid }}</td>
                <td>{{ $i->bid }}</td>
                <td>{{ $i->imodel }}</td>
                <td>{{ $i->iname }}</td>
                <td>{{ $i->isize }}</td>
                <td>{{ $i->icolor }}</td>
                <td>{{ $i->idesc }}</td>
                <td>{{ $i->istock }}</td>
                <td>{{ $i->isprice }}</td>
                <td>{{ $i->icprice }}</td>
                <td><img width="150" height="100" src="{{ URL ::asset('assets/img/gallery/'.$i->image) }}"></td>
                <td><a class="btn btn-warning" href={{"/edititem/".$i->id}}>EDIT</a></td>
                <td><a class="btn btn-danger"  href={{"/deleteitem/".$i->id}}>DELETE</a></td>
            
            </tr>
            
            @endforeach
            
            </table>

    </div>


</div>


</div>


    @endsection