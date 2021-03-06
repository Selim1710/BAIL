@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Stock</h1>

        <br /><br />
        <!-- Message -->
        @if(session()->has('error'))
        <p style="background-color: red;width:100%;padding:2%;">{{ session()->get('error') }}</p>

        @endif
        @if(session()->has('message'))
        <p style="background-color: green;width:100%;padding:2%;">{{ session()->get('message') }}</p>
        @endif
        <br />
        <br />

        <!-- button to add product -->
        <a href="{{ route('stock.create') }}" class="btn-primary">Add Stock &rarr;</a>
        <br /><br />

        <table class="full-width">
            <tr>
                <th>SL</th>
                <th>Product ID</th>
                <th>Name</th>
                <th>Total Produce</th>
                <th>Action</th>
            </tr>
            @foreach($stocks as $stock)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$stock->product_id}}</td>
                <td>{{$stock->product->name}}</td>
                <td>{{$stock->quantity}}</td>

                <td>
                    <a href="{{ route('admin.edit.stock',$stock->id) }}" class="btn-success">Edit</a>
                    <a href="{{ route('admin.remove.stock',$stock->id) }}" class="btn-danger">Remove</a>
                </td>


            </tr>
            @endforeach
        </table>
        <div class="paginate" style="margin: 6% 0 0 40%;">{{ $stocks->links() }}</div>

    </div>
</div>




@endsection