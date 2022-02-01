@extends('admin.index')

@section('content')

<!-- add product button -->
<div class="myform">
  <div class="wrapperf">
    <h2> Add Stock Here &rarr;</h2>

    <form action="{{ route('admin.store.stock') }}" method="post">
      @csrf
      <h2>Accessories Name</h2>
      <div class="input-box">
        <select class="input-box" name="accessories_id" style="background-color: grey;font-size: 1.3rem;color:blanchedalmond;border-radius:10px;" id="">
          <option>--Select Accessories--</option>
          @foreach( $stocks as $stock )
          <option value="{{ $stock->id }}">{{ $stock->name }}</option>
          @endforeach
        </select>
      </div>
      <br>
      <h2>Total Produce</h2>
      <div class="input-box">
        <input type="string" name="total_produce" placeholder="Enter total produce accessories" required>
      </div>

      <div class="input-box button">
        <input type="Submit" value="Submit">
      </div>
    </form>
  </div>
</div>

@endsection