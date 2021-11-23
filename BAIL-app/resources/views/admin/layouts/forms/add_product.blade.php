@extends('admin.index')

@section('content')

 <!-- add product button -->
  <div class="myform">
    <div class="wrapperf">
      <h2> Add Product Here</h2>

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
        <h2>Fuel Type</h2>
        <div class="input-box">
          <input type="string" name="fuel_type" value="" placeholder="Enter Fuel Type" required>
        </div>
        <h2>Cubic Capacity</h2>
        <div class="input-box">
          <input type="string" name="cubic_capacity" value="" placeholder="Enter Cubic Capacity" required>
        </div>
        <h2>Number of seats</h2>
        <div class="input-box">
          <input type="string" name="number_of_seats" value="" placeholder="Enter Number of seats" required>
        </div>
        <h2>Color</h2>
        <div class="input-box">
          <input type="string" name="color" value="" placeholder="Enter Color" required>
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