@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>Report</h1>
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
        <div id="divToPrint">
            <table class="full-width">
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Type</th>
                    <th>Product Name</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>

                @foreach($orders as $order)
                <tr>

                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->product_type }}</td>
                    <td>{{ $order->product_name }}</td>
                    <td>{{ $order->unit_price }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->total_price }}</td>
                </tr>
                @endforeach

                @foreach($accessoryOrder as $order)

                <tr>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->accessories_type }}</td>
                    <td>{{ $order->accessories_name }}</td>
                    <td>{{ $order->accessories_price }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->total_price }}</td>

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