@extends('users.index')


@section('content')
<section class="car-list">
        <div class="container">
            <h2 class="text-center">Car List</h2>

            <div class="car-list-box">
                <div class="car-list-img">
                    <img src="images/model-3.jpg" alt=" model-3" class="img-responsive img-curve">
                </div>

                <div class="car-list-desc">
                    <h4>Model-3</h4>
                    <p class="car-price">$2.3</p>
                    <p class="car-detail">
                         Made in Bangladeah
                         Battary:
                         Range:
                         Top-Speed:
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                    <a href="#" class="btn btn-primary text-right">Customization</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All cars</a>
        </p>
    </section>



@endsection