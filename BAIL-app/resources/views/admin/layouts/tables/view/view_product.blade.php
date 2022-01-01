@extends('admin.index')

@section('content')

<h1 class="text-center">See Product Details</h1>

<!-- print button -->

<div class="printProduct">
    <button onclick="printProduct()" class="btn btn-success">Print</button>
</div>

<div id="divToPrint">
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
</div>

@endsection

<script type="text/javascript">
    function printProduct() {
        var divToPrint = document.getElementById('divToPrint');
        var popupwin = window.open('','_blank','width=1100, height=700');
        popupwin.document.open();
        popupwin.document.write('<html><head><link href="http://127.0.0.1:8000/Backend/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupwin.document.close();
    }
</script>