@extends('website.index')

@section('contents')

<!-- A slider will be here -->

<!-- message -->
@if(session()->has('error'))
<p class="alert alert-danger">{{ session()->get('error') }}</p>

@endif
@if(session()->has('message'))
<p class="alert alert-success">{{ session()->get('message') }}</p>
@endif


<!-- just for making the website beautiful -->


<section class="client_section layout_padding2-bottom  car_bg_img">
  <div class="container">
    <div class="heading_container heading_center psudo_white_primary mb_45 ">
      <h2>
        <br>
        <br>
        Welcome to ,
        <br>
        Bangladesh Auto Industries Limited <br> <br>
      </h2>
      <a href="{{ route('user.show.product') }}" class="btn btn-success">See Our Product &rarr;</a>
    </div>

  </div>
</section>


<!-- end the design  -->



<!-- Accessories -->
<section class="accessories_section layout_padding-bottom">
  <div class="accessories_container">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          Accessories
        </h2>
      </div>

      <div class="row">
        @foreach($accessories as $accessory)
        <div class="col-md-6">
          <div class="box">
            <a href="{{ route('website.accessory.details',$accessory->id) }}">
              <div class="img-box">
                <img src="{{ asset('uploads/accessories/'.$accessory->acc_img) }}" alt="">
              </div>
            </a>
            <div class="detail-box">
              <h5>
                Name: {{ $accessory->name }}
              </h5>
              <h5>
                Details: {{ $accessory->accessories_details }}
              </h5>
              <h6>
                Type: {{ $accessory->accessories_type }}
              </h6>
              <h5>Price: {{ $accessory->accessories_price }} </h5>
              <a href="{{ route('accessory.add.to.cart',$accessory->id) }}" class="btn btn-primary">Add To Cart</a>
            </div>
          </div>

        </div>
        @endforeach
      </div>
    </div>

  </div>
  </div>
</section>

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


    <!-- bus -->

    <div class="btn-box">
      <a href="#">
        View More
      </a>
    </div>
  </div>
</section>

<!-- end car section -->

<!-- about section -->

<section class="about_section layout_padding3">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="{{ asset('/images/suhag.jpg') }}" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              We Are BAIL
            </h2>
          </div>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
            in some form, by injected humour, or randomised words which don't look even slightly believable. If you
            are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
            the middle of text. All
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->

<!-- employee section -->

<br>

<section class="employee_section layout_padding-bottom">
  <div class="container ">
    <div class="heading_container heading_center">
      <h2>
        Our Employee
      </h2>
      <br>
    </div>

    <div class="card-group">
      <!-- loop here -->
      <div class="card col-sm-4">
        <img src="{{ url('images/employee-1.jpg')  }}" class="card-img-top" alt="Add image Here">
        <div class="card-body">
          <h5 class="card-title">employee Name</h5>
          <p class="card-text">employee details</p>
        </div>
      </div>
      <!-- end loop -->
    </div>
  </div>
  </div>
</section>

<br>


<!-- customize section -->
<section class="customize_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Customize Your Product
      </h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form_container">
          <form action="">
            <div>
              <input type="text" class="form-control" placeholder="Customer ID" />
            </div>
            <div>
              <input type="text" class="form-control" placeholder="Product ID" />
            </div>
            <div>
              <input type="string" class="form-control" placeholder="Product Details:" />
            </div>
            <div>
              <select class="form-control nice-select wide">
                <option value="" disabled selected>
                  How many products?
                </option>
                <!-- here value will be id -->
                <option value="">
                  200
                </option>
                <option value="">
                  300
                </option>
                <option value="">
                  400
                </option>
                <option value="">
                  500
                </option>
              </select>
            </div>
            <div>
              <input type="date" class="form-control">
            </div>
            <div class="btn_box">
              <button>
                Order Now
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map_container ">
          <div id="googleMap"></div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- client section -->

<section class="client_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container heading_center psudo_white_primary mb_45">
      <h2>
        What Says Our Customers
      </h2>
    </div>
    <div class="carousel-wrap row ">
      <div class="owl-carousel client_owl-carousel">
        <div class="item">
          <div class="box">
            <div class="detail-box">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
              </p>
              <h6>
                Moana Michell
              </h6>
              <p>
                magna aliqua
              </p>
            </div>
            <div class="img-box">
              <img src="images/client1.jpg" alt="" class="box-img">
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="detail-box">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
              </p>
              <h6>
                Mike Hamell
              </h6>
              <p>
                magna aliqua
              </p>
            </div>
            <div class="img-box">
              <img src="images/client2.jpg" alt="" class="box-img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection