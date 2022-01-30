@extends('admin.index')

@section('content')

 <!-- add product button -->
  <div class="myform">
    <div class="wrapperf">
      <h2> Update Product Here &rarr;</h2>

      <form action="{{route('product.update', $products->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        
      <!-- hidden id -->
        <div class="input-box">
          <!-- <input type="hidden" name="id" value="{{$products['id']}}" required> -->
        </div>
        
        <h2>Name</h2>
        <div class="input-box">
          <input type="string" name="name" value="{{$products['name']}}" placeholder="Enter product name" required>
        </div>
        <h2>Product Price</h2>
        <div class="input-box">
          <input type="string" name="product_price" value="{{$products['product_price']}}" placeholder="Enter Product Price" required>
        </div>
        <h2>Product Type</h2>
        <div class="input-box">
          <input type="string" name="product_type" value="{{$products['product_type']}}" placeholder="Enter product Type" required>
        </div>
        <h2>Product Details</h2>
        <div class="input-box">
          <textarea type="string" name="product_details"  placeholder="Enter Product Details" required>{{$products['product_details']}}</textarea>
        </div>
        <h2>Total Produce</h2>
        <div class="input-box">
          <input type="string"  name="total_produce" value="{{$products['total_produce']}}" placeholder="Enter total produce product" required>
        </div>
        <div class="input-box">
          <input type="file" name="image_path" required>
        </div>
        <div class="input-box button">
          <input type="Submit"value="Update Now">
        </div>
      </form>
    </div>
  </div>

@endsection