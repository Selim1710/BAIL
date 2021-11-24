@extends('admin.index')

@section('content')

 <!-- add product button -->
  <div class="myform">
    <div class="wrapperf">
      <h2> Update Product Here &rarr;</h2>

      <form action="{{route('product.update')}}" method="post" enctype="multipart/form-data">
        @csrf 

        <div class="input-box">
          <input type="hidden" name="id" value="{{$products['id']}}" required>
        </div>
        <h2>Product Model</h2>
        <div class="input-box">
          <input type="string" name="product_model" value="{{$products['product_model']}}" placeholder="Enter Product Model" required>
        </div>
        <h2>Name</h2>
        <div class="input-box">
          <input type="string" name="name" value="{{$products['name']}}" placeholder="Enter product name" required>
        </div>
        <h2>Product Type</h2>
        <div class="input-box">
          <input type="string" name="product_type" value="{{$products['product_type']}}" placeholder="Enter product Type" required>
        </div>
        <h2>Product Details</h2>
        <div class="input-box">
          <textarea type="string" name="product_details" value="" placeholder="Enter Product Details" required>{{$products['product_details']}}</textarea>
        </div>
        <div class="input-box">
          <input type="file" name="image_path" value="{{$products['image_path']}}" required>
        </div>
        <div class="input-box button">
          <input type="Submit"value="Update Now">
        </div>
      </form>
    </div>
  </div>

@endsection