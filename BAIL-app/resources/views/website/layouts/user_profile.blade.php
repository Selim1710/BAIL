@extends('website.index')
@section('contents')

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
                    <h5> Name </h5>
                    <h6> Address </h6>
            
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Track your Package</a>
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

                    <p>Earn Coins</p>
                    <a href="#">Total Coins:</a><br />
                    

                    <p>Our Services</p>
                    <a href="#">Message</a><br />
                    <a href="#">My Review</a><br />
                    <a href="#">Payment Option</a><br />
                    <a href="#">Help</a>

                    
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">

                    <!-- My Order -->

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Product Model</label>
                            </div>
                            <div class="col-md-6">
                                <p>11111</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>Model S</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Product Type</label>
                            </div>
                            <div class="col-md-6">
                                <p>car</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label> <q>Quantity</q></label>
                            </div>
                            <div class="col-md-6">
                                <p>12</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Price</label>
                            </div>
                            <div class="col-md-6">
                                <p>125</p>
                            </div>
                        </div>
                    </div>

                    <!-- track your package -->

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                </div>
            </div>
        </div>
    </form>
</div>

@endsection