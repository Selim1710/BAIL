@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Stock</h1>

        <br /><br />

        <!-- button to add product -->
        <a href="#" class="btn-primary">See Stock &rarr;</a>
        <br /><br /><br />

        <table class="full-width">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Product Type</th>
                <th>Total Produce</th>
                <th>Total Order</th>
                <th>Current Stock</th>
            </tr>
            @foreach($currentStocks as $stock)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$stock->name}}</td>
                <td>{{$stock->product_type}}</td>
                <td>{{$stock->total_produce}}</td>
                <td>{{$stock->total_order}}</td>
                <td>{{$stock->current_stock}}</td>

    

            </tr>
            @endforeach

        </table>


    </div>
</div>




@endsection