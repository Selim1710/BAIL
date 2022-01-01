@extends('admin.index')

@section('content')

<h1 class="text-center">See Accessories Details</h1>

<div class="product-details">
    <div class="product-image">
    <img src="{{url('/uploads/accessories/'.$accessory->acc_img)}}">
    </div>
    <div class="img-details text-center">
        <h1>Accessory Details:</h1>
        <h2>Model: {{$accessory->accessories_model}}</h2>
        <h2>Name: {{$accessory->name}}</h2>
        <h2>Price:{{$accessory->accessories_price}}</h2>
    </div>
</div>

@endsection