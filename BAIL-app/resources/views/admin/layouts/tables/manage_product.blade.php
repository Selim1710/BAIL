@extends('admin.index')

@section('content')

    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Product</h1>

            <br /><br />

            <!-- button to add product -->
            <a href="{{route('product.create')}}" class="btn-primary">Add Product &rarr;</a>
            <br /><br /><br />

            <table class="full-width">
                <tr>
                    <th>Product Model</th>
                    <th>Name</th>
                    <th>images</th>
                    <th>Fuel Type</th>
                    <th>Cubic Capacity</th>
                    <th>Number of seats</th>
                    <th>Color</th>
                    <th>Action</th>
                </tr>
                @foreach($products as $product)

                    <tr>
                        <td>{{$product->product_model}}</td>
                        <td>{{$product->name}}</td>
                        <td><img src="{{asset('/images/product/'.$product->image_path)}}" style="width:50px;height:50px" alt=""></td>
                        <td>{{$product->fuel_type}}</td>
                        <td>{{$product->cubic_capacity}}</td>
                        <td>{{$product->number_of_seats}}</td>
                        <td>{{$product->color}}</td>

                        <td>

                            <a href="/product/edit/{{$product->id}}">Edit &rarr;</a> 
                            <a href="/product/delete/{{$product->id}}">Delete</a>                                                                                                      
                        </td>
                        
                        
                    </tr>
                @endforeach 

            </table>


        </div>
    </div>
   



@endsection