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
            <h1>{{ $orders }}</h1>
            <br>
            Total Products Order
        </div>
        <div class="col-4 text-center">
            <h1>{{ $arrears }}</h1>
            <br>
            Total Arrears(Product)
        </div>

        <div class="col-4 text-center">
            <h1>{{ $accessories }}</h1>
            <br>
            Total accessories
        </div>
        <div class="col-4 text-center">
            <h1>{{ $accessoryOrder }}</h1>
            <br>
            Total accessories Order
        </div>

        <div class="col-4 text-center">
            <h1>{{ $accessoryArrears }}</h1>
            <br>
            Total arrears(Accessory)
        </div>

        <div class="col-4 text-center">
            <h1>{{ $customers }}</h1>
            <br>
            Total Customer
        </div>
        <div class="col-4 text-center">
            <h1>0</h1>
            <br>
            Total Revenue(Products)
        </div>
        <div class="col-4 text-center">
            <h1>0</h1>
            <br>
            Total Revenue(Accessory)
        </div>

        <div class="clearfix"></div>

    </div>
</div>
@endsection