@extends('admin.index')

@section('content')

 <!-- add product button -->
  <div class="myform">
    <div class="wrapperf">
      <h2> Form</h2>
      
      <form action="{{route('addProductForm')}}" method="post" enctype="multipart/form-data">
        @csrf 
        <h2>Product Model</h2>
        <div class="input-box">
          <input type="string" name="product_model" placeholder="Enter Product Model" required>
        </div>
        <h2>Name</h2>
        <div class="input-box">
          <input type="string" name="name" placeholder="Enter product name" required>
        </div>
        <h2>Fuel Type</h2>
        <div class="input-box">
          <input type="string" name="fuel_type" placeholder="Enter Fuel Type" required>
        </div>
        <h2>Cubic Capacity</h2>
        <div class="input-box">
          <input type="string" name="cubic_capacity" placeholder="Enter Cubic Capacity" required>
        </div>
        <h2>Number of seats</h2>
        <div class="input-box">
          <input type="string" name="number_of_seats" placeholder="Enter Number of seats" required>
        </div>
        <h2>Color</h2>
        <div class="input-box">
          <input type="string" name="color" placeholder="Enter Color" required>
        </div>
        <div class="input-box button">
          <input type="Submit"value="Submit Now">
        </div>
      </form>
    </div>
  </div>

@endsection