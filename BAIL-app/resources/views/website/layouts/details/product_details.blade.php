@extends('website.index')
@section('contents')

<h1 style="margin:2%;text-align:center;">Our Product &rarr; </h1>

@if(session()->has('error'))
<p class="alert alert-danger">{{  session()->get('error') }}</p>

@endif
@if(session()->has('message'))
<p class="alert alert-success">{{ session()->get('message') }}</p>
@endif

<img src="{{url('/uploads/product/'.$product->image_path)}}" style="height:50%; width:50%; margin-left:30%;">


<div style="margin-left:10%;margin-bottom:7%; text-align:center;">
    <h1>Product Details:</h1>
    <h2>Models: {{$product->product_model}}</h2>
    <h2>Name: {{$product->name}}</h2>
    <h2>Price:{{$product->product_price}}</h2>
    <h2>Total Produce:{{$product->total_produce}}</h2>
    <br>
    <a href="{{route('user.product.order',$product->id)}}" style="padding:1%; background:blue; color:cornsilk; text-decoration:none; border-radius:5px;">Order Now</a>
    <a href="{{ route('product.add.to.cart', $product->id) }}" style="padding:1%;border:none; background:green; color:cornsilk; text-decoration:none; border-radius:5px;">Add To Cart</a>


</div>

@endsection