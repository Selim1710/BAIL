<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title>Bangladesh Auto Industries Limited</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/website/bootstrap.css') }}" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="{{ url('css/website/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ url('css/website/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ url('css/website/responsive.css') }}" rel="stylesheet" />
    <!-- For User Profile -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <!-- user profile -->

    <div class="container emp-profile">
        <form action="#" method="">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5> {{ auth()->user()->name }} </h5>
                        <h6> Be Happy, <br> Spread Hapiness </h6>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">User Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="order-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order" aria-selected="false">My Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="package-tab" data-toggle="tab" href="#package" role="tab" aria-controls="package" aria-selected="false">Track your Package</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="cart-tab" data-toggle="tab" href="#cart" role="tab" aria-controls="cart" aria-selected="false">My Cart({{ session()->has('cart') ? count(session()->get('cart')):0 }})</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <!-- top -->
                        <p>Earn Coins</p>
                        <a href="#">Total Coins:</a><br />

                        <!-- bottom -->
                        <p>Our Services</p>
                        <a href="#">Message</a><br />
                        <a href="#">My Review</a><br />
                        <a href="#">Payment Option</a><br />
                        <a href="#">Help</a>


                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">


                        <!-- User Details -->


                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ auth()->user()->email }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>01628-520989</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>give address</p>
                                </div>
                            </div>
                        </div>

                        <!-- My Order -->

                        <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">

                            <div class="profile-table">
                                <table>
                                    <tr>
                                        <th>SL</th>
                                        <th>Model</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Product Type</th>
                                        <th>Product Details</th>
                                        <th>Total Produce</th>
                                        <th>Action</th>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <a href="#">view</a>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>

                        <!-- track your package -->

                        <div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="package-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Ready To Ship</label>
                                </div>
                                <div class="col-md-6">
                                    <p>yes</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Package is Ready</label>
                                </div>
                                <div class="col-md-6">
                                    <p>10$/hr</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Ship Transit</label>
                                </div>
                                <div class="col-md-6">
                                    <p>10$/hr</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Logistic Facility</label>
                                </div>
                                <div class="col-md-6">
                                    <p>wrapping the product</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Product sent</label>
                                </div>
                                <div class="col-md-6">
                                    <p>10$/hr</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Complete Delivery</label>
                                </div>
                                <div class="col-md-6">
                                    <p>done</p>
                                </div>
                            </div>

                        </div>
                        <!-- end tracking Package -->

                        <!-- Add To Cart -->
                        <div class="tab-pane fade" id="cart" role="tabpanel" aria-labelledby="cart-tab">

                            <div class="profile-table">
                                <table>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Quantity</th>
                                        <th>Sub-Total</th>
                                        <th>Action</th>

                                    </tr>
                                    @if($carts)
                                    @foreach($carts as $cart)
                                    <tr>
                                        <td>{{ $cart['product_name'] }}</td>
                                        <td>{{ $cart['product_price'] }}</td>
                                        <td>{{ $cart['product_quantity'] }}</td>
                                        <td>{{ (int)$cart['product_price'] * (int)$cart['product_quantity'] }}</td>

                                        <td>
                                            <a href="{{ route('product.clear.cart') }}">clear</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif

                                </table>
                            </div>
                        </div>
                        <!-- add to cart end here -->
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- jQery -->
    <script src="{{ url('js/website/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="{{ url('js/website/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="{{ url('js/website/custom.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->


</body>

</html>