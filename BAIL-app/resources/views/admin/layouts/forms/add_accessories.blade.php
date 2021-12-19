@extends('admin.index')

@section('content')

  <div class="myform">
    <div class="wrapperf">
      <h2> Add Here &rarr;</h2>

      <form action="{{route('accessories.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
        <h2>Model</h2>
        <div class="input-box">
          <input type="string" name="accessories_model" value="" placeholder="Enter Accessories Model" required>
        </div>
        <h2>Name</h2>
        <div class="input-box">
          <input type="string" name="name" value="" placeholder="Enter Accessories name" required>
        </div>
        <h2>Accessories Type</h2>
        <div class="input-box">
          <input type="string" name="accessories_type" value="" placeholder="Enter Accessories Type" required>
        </div>
        <h2> Details</h2>
        <div class="input-box">
          <textarea type="string"  name="accessories_details" value="" placeholder="Enter Accessories Details:" required></textarea>
        </div>

        <h2>Price</h2>
        <div class="input-box">
          <input type="string" name="accessories_price" value="" placeholder="Enter Accessories Type" required>
        </div>
        <div class="input-box">
          <input type="file" name="acc_img" value="" required>
        </div>
        <div class="input-box button">
          <input type="Submit"value="Submit Now">
        </div>
      </form>
    </div>
  </div>

@endsection