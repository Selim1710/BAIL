@extends('website.index')
@section('contents')
<section class="vh-100 bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Confirm Order</h2>

                            <form action="#" method="" enctype="multipart/form-data">

                                @csrf
                                
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Accessories Model</label>
                                    <input type="string" name="accessories_model" value="{{$accessory->accessories_model}}" id="form3Example1cg" class="form-control form-control-lg" required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Name</label>
                                    <input type="string" name="name"value="{{$accessory->name}}" id="form3Example1cg" class="form-control form-control-lg" required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Accessories Details</label>
                                    <input type="string" name="accessories_details"value="{{$accessory->accessories_details}}" id="form3Example1cg" class="form-control form-control-lg" required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Price</label>
                                    <input type="string" name="accessories_price"value="{{$accessory->accessories_price}}" id="form3Example1cg" class="form-control form-control-lg" required />
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Confirm Order</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection