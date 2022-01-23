@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Order</h1>

        <br />
        <!-- button to add product -->
        <a href="#" class="btn-primary">See order list &rarr;</a>
        <br /><br /> <br>
        <div class="search">
            <input type="search" name="search" placeholder="Search Order Product Here">
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </div>
        <br />

        <table class="full-width">
            <tr>
                <th>SL</th>

                <th>User ID</th>
                <th> Name</th>
                <th> E-mail</th>
                <th>Product Model</th>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>

                <th>Action</th>
            </tr>


            @foreach($orders as $order)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>{{ $order->user_id }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->product_model }}</td>
                <td>{{ $order->product_name }}</td>
                <td>{{ $order->unit_price }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->total_price }}</td>


                <td>
                    <a href="#" class="btn btn-success">Confirm</a>

                    <a href="#" class="btn btn-danger">Remove</a>
                </td>
            </tr>
            @endforeach



        </table>


    </div>
</div>




@endsection