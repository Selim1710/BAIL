@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1> Accessories Stock Table</h1>

        <br />

        <!-- Message -->
        @if(session()->has('error'))
        <p style="background-color: red;width:100%;padding:2%;">{{ session()->get('error') }}</p>

        @endif
        @if(session()->has('message'))
        <p style="background-color: green;width:100%;padding:2%;">{{ session()->get('message') }}</p>
        @endif
        <br />

        <!-- button  -->
        <a href="{{ route('admin.add.stock') }}" class="btn-primary">Add Stock &rarr;</a>
        <br />
        <br />

        <table class="full-width">
            <tr>
                <th>SL</th>
                <th>Accessories ID</th>
                <th>Total Produce</th>
                <th>Current Stock</th>
                <th>Action</th>
            </tr>

            @foreach($stocks as $stock )
             <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $stock->accessories_id }}</td>
                <td>{{ $stock->total_produce}}</td>
                <td>{{ $stock->total_produce - $stock->total_order + $stock->current_stock}}</td>
                <td></td>
                <td>
                    <a href="#">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="paginate" style="margin: 6% 0 0 40%;"></div>

    </div>
</div>




@endsection