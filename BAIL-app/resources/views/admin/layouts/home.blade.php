@extends('admin.index')

@section('content')
<div class="main-content">
    <div class="wrapper">
        <h1>Dashboard</h1>

        <div class="col-4 text-center">
            <h1>{{ $products }}</h1>
            <br>
            Total Products
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
            Total Product Order
        </div>

        <div class="col-4 text-center">
            <h1>{{ $arrears }}</h1>
            <br>
            Total Arrears
        </div>

        <div class="clearfix"></div>

    </div>
</div>
@endsection