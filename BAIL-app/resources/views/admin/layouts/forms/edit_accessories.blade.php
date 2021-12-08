@extends('admin.index')

@section('content')

  <div class="myform">
    <div class="wrapperf">
      <h2> Add Here &rarr;</h2>

      <form action="{{route('accessories.update')}}" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="input-box">
          <input type="hidden" name="id" value="{{$accessories['id']}}" required>
        </div>
        <h2>Model</h2>
        <div class="input-box">
          <input type="string" name="accessories_model" value="{{$accessories['accessories_model']}}" placeholder="Enter Accessories Model" required>
        </div>
        <h2>Name</h2>
        <div class="input-box">
          <input type="string" name="name" value="{{$accessories['name']}}" placeholder="Enter Accessories name" required>
        </div>
        <h2>Accessories Type</h2>
        <div class="input-box">
          <input type="string" name="accessories_type" value="{{$accessories['accessories_type']}}" placeholder="Enter Accessories Type" required>
        </div>
        <h2> Details</h2>
        <div class="input-box">
          <textarea type="string"  name="accessories_details" value="{{$accessories['accessories_details']}}" placeholder="Enter Accessories Details:" required></textarea>
        </div>
        <div class="input-box">
          <input type="file" name="acc_img" value="{{$accessories['acc_img']}}" required>
        </div>
        <div class="input-box button">
          <input type="Submit"value="Submit Now">
        </div>
      </form>
    </div>
  </div>

@endsection