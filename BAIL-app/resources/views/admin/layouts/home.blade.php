@extends('admin.index')

@section('content')
<div class="main-content">
    <div class="wrapper">
        <h1>Dashboard</h1>

        <div class="col-4 text-center">
            <h1>{{ $products }}</h1>
            <br>
            Number of Products
        </div>

        <div class="col-4 text-center">
            <h1>{{ $accessories }}</h1>
            <br>
            Total accessories
        </div>

        <div class="col-4 text-center">
            <h1>{{ $customers }}</h1>
            <br>
            Total Customer
        </div>

        <div class="col-4 text-center">
            <h1>{{ $orders }}</h1>
            <br>
            Total Order
        </div>

        <div class="col-4 text-center">
            <h1>500</h1>
            <br>
            Total Revenue
        </div>

        <div class="clearfix"></div>

    </div>
</div>
@endsection