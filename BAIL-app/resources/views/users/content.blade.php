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
    <!-- car search Section Ends Here -->

    <!-- new_release Section Starts Here -->
    <section class="new_release">
        <div class="container">
            <h2 class="text-center">New Release</h2>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/P-1.jpg" alt="Picture_1" class="img-responsive img-curve">

                <h3 class="float-text text-white">Picture_1</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/P-2.jpg" alt="Picture_2" class="img-responsive img-curve">

                <h3 class="float-text text-white">Picture_2</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/P-3.jpg" alt="Picture_3" class="img-responsive img-curve">

                <h3 class="float-text text-white">Picture_3</h3>
            </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/P-4.jpg" alt="Picture_4" class="img-responsive img-curve">
    
                    <h3 class="float-text text-white">Picture_4</h3>
                </div>
                </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- new_release Section Ends Here -->

    <!-- car list Section Starts Here -->
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

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                    <a href="order.html" class="btn btn-primary text-right">Customization</a>
                </div>
            </div>

            <div class="car-list-box">
                <div class="car-list-img">
                    <img src="images/Model-S.webp" alt="Model-S" class="img-responsive img-curve">
                </div>

                <div class="car-list-desc">
                    <h4>Model-S</h4>
                    <p class="car-price">$2.3</p>
                    <p class="car-detail">
                        Made in Bangladeah
                        Battary:
                        Range:
                        Top-Speed:
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                    <a href="#" class="btn btn-primary">Customization</a>
                </div>
            </div>

            <div class="car-list-box">
                <div class="car-list-img">
                    <img src="images/model-x.webp" alt="Model-X" class="img-responsive img-curve">
                </div>

                <div class="car-list-desc">
                    <h4>Model-X</h4>
                    <p class="car-price">$2.3</p>
                    <p class="car-detail">
                        Made in Bangladeah
                        Battary:
                        Range:
                        Top-Speed:
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                    <a href="#" class="btn btn-primary">Customization</a>
                </div>
            </div>

            <div class="car-list-box">
                <div class="car-list-img">
                    <img src="images/model-y.png" alt="Model-Y" class="img-responsive img-curve">
                </div>

                <div class="car-list-desc">
                    <h4>Model-Y</h4>
                    <p class="car-price">$2.3</p>
                    <p class="car-detail">
                        Made in Bangladeah
                        Battary:
                        Range:
                        Top-Speed:
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                    <a href="#" class="btn btn-primary">Customization</a>
                </div>
            </div>

            <div class="car-list-box">
                <div class="car-list-img">
                    <img src="images/Model-S.webp" alt="Model-S" class="img-responsive img-curve">
                </div>

                <div class="car-list-desc">
                    <h4>Model-S</h4>
                    <p class="car-price">$2.3</p>
                    <p class="car-detail">
                        Made in Bangladeah
                        Battary:
                        Range:
                        Top-Speed:
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                    <a href="#" class="btn btn-primary">Customization</a>
                </div>
            </div>

            <div class="car-list-box">
                <div class="car-list-img">
                    <img src="images/model-3.jpg" alt="Model-X" class="img-responsive img-curve">
                </div>

                <div class="car-list-desc">
                    <h4>Model-X</h4>
                    <p class="car-price">$2.3</p>
                    <p class="car-detail">
                        Made in Bangladeah
                        Battary:
                        Range:
                        Top-Speed:
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                    <a href="#" class="btn btn-primary">Customization</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All cars</a>
        </p>
    </section>
    <!-- Car list Section Ends Here -->
@endsection