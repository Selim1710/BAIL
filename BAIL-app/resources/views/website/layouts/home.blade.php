@extends('website.index')

@section('contents')

<!-- A slider will be here -->





<!-- just for making the website beautiful -->


<section class="client_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container heading_center psudo_white_primary mb_45">
      <h2>
        <br>
        <br>
          Welcome to ,<br>
        Bangladesh Auto Industries Limited <br> <br>
      </h2>
      <button class="btn btn-success">See Our Product &rarr;</button>
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
            <div class="img-box">
              <img src="{{ asset('uploads/accessories/'.$accessory->acc_img) }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                {{ $accessory->accessories_model }}
              </h5>
              <h5>
                {{ $accessory->name }}
              </h5>
              <h5>
                {{ $accessory->accessories_details }}
              </h5>
              <h6>
                <span>20%</span> Off
              </h6>
              <a href="{{route('user.accessory.order')}}" class="btn btn-primary">Order Now</a>
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

<!-- end car section -->

<!-- about section -->

<section class="about_section layout_padding">
  <div class="container  ">

    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="images/about-img.png" alt="">
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
                <option value="">
                  2
                </option>
                <option value="">
                  3
                </option>
                <option value="">
                  4
                </option>
                <option value="">
                  5
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