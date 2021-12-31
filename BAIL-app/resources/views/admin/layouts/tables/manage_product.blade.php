@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Product</h1>

        <br />

        <!-- button to add product -->
        <a href="{{route('product.create')}}" class="btn-primary">Add Product &rarr;</a>
        <br />
        <br />
        <br />
        <!-- Search -->

        <form action="">
            <div class="search">
                <input type="search" name="search" value="{{ $search }}" placeholder="Search Product By Model">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>
        </form>

        <!-- end search -->
        <br />
        <br />

        <table class="full-width">
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
            @foreach($products as $key=>$product)

            <tr>
                <td>{{$key+1}}</td>
                <td>{{$product->product_model}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->product_price}}</td>
                <td><img src="{{url('/uploads/product/'.$product->image_path)}}" style="width:50px;height:50px" alt=""></td>
                <td>{{$product->product_type}}</td>
                <td>{{$product->product_details}}</td>
                <td>{{$product->total_produce}}</td>


                <td>
                    <a href="{{route('product.edit',$product->id)}}">edit &rarr;</a>
                    <a href="{{route('product.destroy',$product->id)}}">Delete</a>
                </td>


            </tr>
            @endforeach

        </table>


    </div>
</div>




@endsection