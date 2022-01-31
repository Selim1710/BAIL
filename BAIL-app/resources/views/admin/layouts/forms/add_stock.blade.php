@extends('admin.index')

@section('content')

<!-- add product button -->
<div class="myform">
  <div class="wrapperf">
    <h2> Add Stock Here &rarr;</h2>

    <form action="{{ route('stock.store') }}" enctype="multipart/form-data" method="post">
      @csrf
      <h2>Product Name</h2>
      <div class="input-box">
        <select class="input-box" name="product_id" style="background-color: grey;font-size: 1.3rem;color:blanchedalmond;border-radius:10px;" id="">
          <option>--Select Product--</option>
          @foreach( $products as $product )
          <option value="{{ $product->id }}">{{ $product->name }}</option>
          @endforeach
        </select>
      </div>
      <br>
      <h2>Total Produce</h2>
      <div class="input-box">
        <input type="string" name="total_produce" value="" placeholder="Enter total produce product" required>
      </div>

      <div class="input-box button">
        <input type="Submit" value="Submit">
      </div>
    </form>
  </div>
</div>

@endsection