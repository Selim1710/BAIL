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

        <br /><br /> <br>

        <br />

        <table class="full-width">
            <tr>
                <th>SL</th>
                <th>User ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Type</th>
                <th>Accessories Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>


            <tr>


                <td>

                    <a href="#" style="text-transform: capitalize;background:#10ac84;padding:1%;color:#ecf0f1;text-decoration:none;">status</a>
                    <a href="#" style="text-transform: capitalize;background:#ee5253;padding:1%;color:#ecf0f1;text-decoration:none;">Remove</a>

                </td>
            </tr>

        </table>
        <div class="paginate" style="margin: 6% 0 0 40%;"></div>

    </div>
</div>
@endsection