@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>Accessories Order</h1>
        <br>

        <!-- Message -->
        @if(session()->has('error'))
        <p style="background-color: red;width:100%;padding:2%;">{{ session()->get('error') }}</p>

        @endif
        @if(session()->has('message'))
        <p style="background-color: green;width:100%;padding:2%;">{{ session()->get('message') }}</p>
        @endif

        <br /><br /> <br>

        <br />

        <table class="full-width">
            <tr>
                <th>SL</th>
                <th>User</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Type</th>
                <th>Accessories Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
            @foreach($accessories as $order)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $order->user_id }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->accessories_type }}</td>
                <td>{{ $order->accessories_name }}</td>
                <td>{{ $order->accessories_price }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->total_price }}</td>

                <td>

                    <a href="{{ route('admin.confirm.accessory.order',$order->id) }}" style="text-transform: capitalize;background:#10ac84;padding:1%;color:#ecf0f1;text-decoration:none;">{{ $order->status }}</a>
                    <a href="{{ route('admin.remove.accessory.order',$order->id) }}" style="text-transform: capitalize;background:#ee5253;padding:1%;color:#ecf0f1;text-decoration:none;">Remove</a>

                </td>
            </tr>
            @endforeach
        </table>
        <div class="paginate" style="margin: 6% 0 0 40%;">{{ $accessories->links() }}</div>

    </div>
</div>
@endsection