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
        <h2>Fuel Type</h2>
        <div class="input-box">
          <input type="string" name="fuel_type" value="{{$products['fuel_type']}}" placeholder="Enter Fuel Type" required>
        </div>
        <h2>Cubic Capacity</h2>
        <div class="input-box">
          <input type="string" name="cubic_capacity" value="{{$products['cubic_capacity']}}" placeholder="Enter Cubic Capacity" required>
        </div>
        <h2>Number of seats</h2>
        <div class="input-box">
          <input type="string" name="number_of_seats" value="{{$products['number_of_seats']}}" placeholder="Enter Number of seats" required>
        </div>
        <h2>Color</h2>
        <div class="input-box">
          <input type="string" name="color" value="{{$products['color']}}" placeholder="Enter Color" required>
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