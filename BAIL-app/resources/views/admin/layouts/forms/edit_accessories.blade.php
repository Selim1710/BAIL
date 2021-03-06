@extends('admin.index')

@section('content')

  <div class="myform">
    <div class="wrapperf">
      <h2> Add Here &rarr;</h2>

      <form action="{{route('accessories.update',$accessories->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        <h2>Name<small style="color:blue">(Unchangeable)</small></h2>
        <div class="input-box">
          <input type="string" name="name" value="{{$accessories['name']}}" placeholder="Enter Accessories name" readonly required>
        </div>
        <h2>Accessories Type</h2>
        <div class="input-box">
          <input type="string" name="accessories_type" value="{{$accessories['accessories_type']}}" placeholder="Enter Accessories Type" required>
        </div>
        <h2>Price</h2>
        <div class="input-box">
          <input type="string" name="accessories_price" value="{{$accessories['accessories_price']}}" placeholder="Enter Accessories Type" required>
        </div>
        <h2> Details</h2>
        <div class="input-box">
          <textarea type="string"  name="accessories_details" placeholder="Enter Accessories Details:" required>{{$accessories['accessories_details']}}</textarea>
        </div>
        
        <div class="input-box button">
          <input type="Submit"value="Submit Now">
        </div>
      </form>
    </div>
  </div>

@endsection