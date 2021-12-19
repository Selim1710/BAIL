@extends('website.index')

@section('contents')

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
      <li data-filter=".truck">Truck</li>
    </ul>

    <div class="filters-content">
      <div class="row grid">
        @foreach($products as $car)
        <div class="col-sm-6 col-lg-4 all {{ $car->product_type }}">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="{{url('/uploads/product/'.$car->image_path)}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  {{ $car->product_model }}
                </h5>
                <h5>
                  {{ $car->name }}
                </h5>
                <p>
                  {{ $car->product_details }}
                </p>
                <div class="options">
                  <h6>
                    Price
                  </h6>
                </div>
                <a href="{{route('user.product.order')}}" class="btn btn-primary">Order Now</a>
              </div>
            </div>

          </div>
        </div>
        @endforeach
      </div>
    </div>


    <!-- bus -->

    <div class="btn-box">
      <a href="#">
        View More
      </a>
    </div>
  </div>
</section>
@endsection