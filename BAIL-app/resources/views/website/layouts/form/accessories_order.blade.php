@extends('website.index')
@section('contents')
<section class="vh-100 bg-image" style="background:#bdc3c7;">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Confirm Order</h2>
                            <!-- message -->
                            @if(session()->has('error'))
                            <p class="alert alert-danger">{{ session()->get('error') }}</p>
                            @endif
                            @if(session()->has('message'))
                            <p class="alert alert-success">{{ session()->get('message') }}</p>
                            @endif
                            <!-- form -->
                            <form action="{{ route('accessory.place.order',$accessory->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Name</label>
                                    <input type="string" name="name" value="{{$accessory->name}}" id="form3Example1cg" class="form-control form-control-lg" readonly required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Price</label>
                                    <input type="string" name="accessories_price" value="{{$accessory->accessories_price}}" id="form3Example1cg" class="form-control form-control-lg" readonly required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Accessories Type</label>
                                    <input type="string" name="accessories_type" value="{{$accessory->accessories_type}}" id="form3Example1cg" class="form-control form-control-lg" readonly required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Current Stock</label>
                                    <input type="string" name="available" value="{{$accessory->available}}" id="form3Example1cg" class="form-control form-control-lg" readonly required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Quantity</label>
                                    <input type="string" name="quantity" placeholder="Enter the Quantity" value="" id="form3Example1cg" class="form-control form-control-lg" required />
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

<div style="background:#bdc3c7"><br><br><br><br><br><br><br><br><br><br><br><br></div>
@endsection