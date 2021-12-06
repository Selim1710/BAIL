@extends('users.index')

@section('content')


<!-- car search Section Starts Here -->
<section class="car-search text-center">
    <div class="container">

        <form action="car-search.html" method="POST">
            <input type="search" name="search" placeholder="Search for car.." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>

    </div>
</section>
<!-- slider -->
<section class="Slider">
    <div class="container">
        <h2 class="text-center">New Release</h2>
        <div class="img-slider">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/p-1.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="images/p-2.jpg" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="images/p-3.jpg"style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
</section>

<!-- Car  -->
<section class="Car">
    <div class="container">
        <h2 class="text-center">Car</h2>
        @foreach($products as $car)
        <a href="#">
            <div class="box-3 float-container">
                <img src="{{url('/uploads/product/'.$car->image_path)}}" alt="Picture_1" class="img-responsive img-curve">

                <h3 class="float-text text-white">{{$car->name}}</h3>
            </div>
        </a>
        @endforeach

        <div class="clearfix"></div>
    </div>
</section>
<!-- new_release Section Ends Here -->

<!-- Accessories Section Starts Here -->
<section class="Accessories">
    <div class="container">
        <h2 class="text-center">Accessories</h2>

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

<!-- Branch -->

<section class="Branch">
    <div class="container">
        <h2 class="text-center">Our Branches</h2>

        <a href="#">
            <div class="box-3 float-container">
                <img src="images/show-room-1.jpg" alt="Picture of Branch" class="img-responsive img-curve">

                <h3 class="float-text text-white">Our Branch On Dhaka</h3>
            </div>
        </a>

        <!-- next -->

        <a href="#">
            <div class="box-3 float-container">
                <img src="images/show-room-2.jpg" alt="Picture of Branch" class="img-responsive img-curve">

                <h3 class="float-text text-white">Our Branch On Rajshahi</h3>
            </div>
        </a>

        <a href="#">
            <div class="box-3 float-container">
                <img src="images/show-room-3.jpg" alt="Picture of Branch" class="img-responsive img-curve">

                <h3 class="float-text text-white">Our Branch On Khulna</h3>
            </div>
        </a>

        <a href="#">
            <div class="box-3 float-container">
                <img src="images/show-room-4.jpg" alt="Picture of Branch" class="img-responsive img-curve">

                <h3 class="float-text text-white">Our Branch On Barishal</h3>
            </div>
        </a>


        <div class="clearfix"></div>
    </div>
</section>


<!-- employee -->

<section class="Employee">
    <div class="container">
        <h2 class="text-center">Employee</h2>
        <div class="employee-card">
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="images/employee-1.jpg" alt="first employee">
                        <h5>
                            Hadi-uz-Zaman <br>
                            CEO & Founder
                        </h5>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="images/employee-1.jpg" alt="first employee">
                        <h5>
                            Hadi-uz-Zaman <br>
                            CEO & Founder
                        </h5>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="images/employee-1.jpg" alt="first employee">
                        <h5>
                            Hadi-uz-Zaman <br>
                            CEO & Founder
                        </h5>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="images/employee-1.jpg" alt="first employee">
                        <h5>
                            Hadi-uz-Zaman <br>
                            CEO & Founder
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection