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
                    <th>Product Model</th>
                    <th>Name</th>
                    <th>Product Type</th>
                    <th>Total Produce</th>
                    <th>Total Order</th>
                    <th>Current Stock</th>
                    <th>Action</th>
                </tr>
                @foreach($stocks as $stock)
                    <tr>
                        <td>{{$stock->product_model}}</td>
                        <td>{{$stock->name}}</td>
                        <td>{{$stock->product_type}}</td>
                        <td>{{$stock->total_produce}}</td>
                        <td>00</td>
                        <td>00</td>  
                    </tr>
                @endforeach

            </table>


        </div>
    </div>
   



@endsection