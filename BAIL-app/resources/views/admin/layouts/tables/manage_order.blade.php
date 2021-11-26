@extends('admin.index')

@section('content')

    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Order</h1>

            <br /><br />

            <!-- button to add product -->
            <a href="#" class="btn-primary">See order list &rarr;</a>
            <br /><br /><br />

            <table class="full-width">
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Customer Address</th>
                    <th>Product Id</th>
                    <th>Action</th>
                </tr>

                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->customer_id}}</td>
                        <td>{{$order->customer_name}}</td>
                        <td>{{$order->customer_address}}</td>
                        <td>{{$order->product_id}}</td>
                        <td>
                            <a href="#">Confirm</a>
                            <a href="#">Cancel</a>
                        </td>
                    </tr>
                @endforeach
                

            </table>


        </div>
    </div>
   



@endsection