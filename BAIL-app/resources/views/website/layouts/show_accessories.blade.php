@extends('website.index')
@section('contents')

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

@endsection