@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Order</h1>
        <br>

        <!-- Message -->
        @if(session()->has('error'))
        <p style="background-color: red;width:100%;padding:2%;">{{ session()->get('error') }}</p>

        @endif
        @if(session()->has('message'))
        <p style="background-color: green;width:100%;padding:2%;">{{ session()->get('message') }}</p>
        @endif

        <br />
        <!-- print button -->
        <div class="printProduct">
            <button onclick="printProduct()" class="btn btn-success">Print</button>
        </div>

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
        <div id="divToPrint">
            <table class="full-width">
                <tr>
                    <th>SL</th>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Type</th>
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
                    <td>{{ $order->product_type }}</td>
                    <td>{{ $order->product_name }}</td>
                    <td>{{ $order->unit_price }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->total_price }}</td>


                    <td>

                        <a href="{{ route('admin.confirm.order',$order->id) }}" style="text-transform: capitalize;background:#10ac84;padding:1%;color:#ecf0f1;text-decoration:none;">{{ $order->status }}</a>
                        <a href="{{ route('admin.remove.order',$order->id) }}" style="text-transform: capitalize;background:#ee5253;padding:1%;color:#ecf0f1;text-decoration:none;">Remove</a>

                    </td>
                </tr>
                @endforeach
            </table>
            <div class="paginate" style="margin: 6% 0 0 40%;">{{ $orders->links() }}</div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript">
    function printProduct() {
        var divToPrint = document.getElementById('divToPrint');
        var popupwin = window.open('', '_blank', 'width=1100, height=700');
        popupwin.document.open();
        popupwin.document.write('<html><head><link href="http://127.0.0.1:8000/Backend/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupwin.document.close();
    }
</script>