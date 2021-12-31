@extends('admin.index')

@section('content')

<h1 class="text-center">See Product Details</h1>


<div class="print-product">
    <button type="submit" class="btn btn-success">Print</button>
</div>

<div class="product-details">
    <div class="product-image">
        <img src="{{url('/uploads/product/'.$product->image_path)}}">
    </div>
    <div class="img-details text-center">
        <h1>Product Details:</h1>
        <h2>Models: {{$product->product_model}}</h2>
        <h2>Name: {{$product->name}}</h2>
        <h2>Price:{{$product->product_price}}</h2>
        <h2>Total Produce:{{$product->total_produce}}</h2>
    </div>
</div>

@endsection