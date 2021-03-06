@extends('website.index')

@section('contents')

<!-- message -->
@if(session()->has('error'))
<p class="alert alert-danger">{{ session()->get('error') }}</p>

@endif
@if(session()->has('message'))
<p class="alert alert-success">{{ session()->get('message') }}</p>
@endif

<!-- car section -->

<section class="car_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Our Product
      </h2>
    </div>

    <ul class="filters_menu">
      <li class="active" data-filter="*">All</li>
      <li data-filter=".car">Car</li>
      <li data-filter=".bus">Bus</li>
      <li data-filter=".bike">Bike</li>
      <li data-filter=".cycle">Cycle</li>
      <li data-filter=".truck">Truck</li>
    </ul>

    <div class="filters-content">
      <div class="row grid">
        @foreach($products as $car)
        <div class="col-sm-6 col-lg-4 all {{ $car->product_type }}">
          <div class="box">
            <a href="{{ route('website.product.details',$car->id) }}">
              <div class="img-box">
                <img src="{{url('/uploads/product/'.$car->image_path)}}" alt="">
              </div>
            </a>
            <div class="detail-box">
              <h5>
                Name: {{ $car->name }}
              </h5>
              <p>
                Details: {{ $car->product_details }}
              </p>

              <h6>
                Price: {{ $car->product_price }}
              </h6>

              <a href="{{ route('product.add.to.cart', $car->id) }}" class="btn btn-primary">Add To Cart</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <div class="btn-box">
      <a href="#">
        View More
      </a>
    </div>
  </div>
</section>

<!-- end car section -->

@endsection