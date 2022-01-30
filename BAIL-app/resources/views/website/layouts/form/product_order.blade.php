@extends('website.index')
@section('contents')

<!-- message -->
@if(session()->has('message'))
<p style=" text-align:center;background-color: #e74c3c;padding:1%;font-size:1.3rem;margin-left:20%;width:60%;">{{ session()->get('message')}}</p>
@endif

<!-- end message -->

<section class="vh-100 bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Confirm Order</h2>

                            <form action="{{ route('customer.place.order',$products->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Name</label>
                                    <input type="string" name="name" value="{{$products->name}}" id="form3Example1cg" class="form-control form-control-lg" readonly required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Price</label>
                                    <input type="string" name="price" value="{{$products->product_price}}" id="form3Example1cg" class="form-control form-control-lg" readonly required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Product Details</label>
                                    <input type="string" name="product_details" value="{{$products->product_details}}" id="form3Example1cg" class="form-control form-control-lg"readonly required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Current Stock</label>
                                    <input type="string" name="available" value="{{$products->available}}" id="form3Example1cg" class="form-control form-control-lg"readonly required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Quantity</label>
                                    <input type="string" name="quantity" value="" placeholder="Enter the Quantity" id="form3Example1cg" class="form-control form-control-lg" required />
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