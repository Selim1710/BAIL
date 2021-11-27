@extends('admin.index')

@section('content')

 <!-- add product button -->
  <div class="myform">
    <div class="wrapperf">
      <h2> Add Product Here &rarr;</h2>

      <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
        <h2>Product Model</h2>
        <div class="input-box">
          <input type="string" name="product_model" value="" placeholder="Enter Product Model" required>
        </div>
        <h2>Name</h2>
        <div class="input-box">
          <input type="string" name="name" value="" placeholder="Enter product name" required>
        </div>
        <h2>Product Type</h2>
        <div class="input-box">
          <input type="string" name="product_type" value="" placeholder="Enter Product Type" required>
        </div>
        <h2>Product Details</h2>
        <div class="input-box">
          <textarea type="string"  name="product_details" value="" placeholder="Enter Product Details:" required></textarea>
        </div>
        <div class="input-box">
          <input type="file" name="image_path" value="" required>
        </div>
        <div class="input-box button">
          <input type="Submit"value="Submit Now">
        </div>
      </form>
    </div>
  </div>

@endsection