@extends('website.index')
@section('contents')

<!-- message -->
@if(session()->has('error'))
<p class="alert alert-danger">{{ session()->get('error') }}</p>

@endif
@if(session()->has('message'))
<p class="alert alert-success">{{ session()->get('message') }}</p>
@endif

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

@endsection