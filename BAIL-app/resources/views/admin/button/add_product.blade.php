@extends('admin.index')
@section('content')

<!-- add product button -->

<div class="myform">
  <div class="wrapperf">
      <h2> Form</h2>
      <form action="#" method="" enctype= multipart>
        <h2>Product ID</h2>
        <div class="input-box">
          <input type="Decimal" name="Product_ID" placeholder="Enter product id" required>
        </div>
        <h2>Name</h2>
        <div class="input-box">
          <input type="text" name="" placeholder="Enter product name" required>
        </div>
        <h2>Model Number</h2>
        <div class="input-box">
          <input type="Decimal" name="" placeholder="Enter Model Number" required>
        </div>
        <h2>Product type</h2>
        <div class="input-box">
          <input type="text" name="" placeholder="Enter product type" required>
        </div>
        <div class="input-box button">
          <input type="Submit" value="Submit Now">
        </div>
      </form>
  </div>
</div>

@endsection