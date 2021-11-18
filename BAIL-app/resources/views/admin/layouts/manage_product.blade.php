@extends('admin.index')

@section('content')

    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Product</h1>

            <br /><br />

            <!-- button to add product -->
            <a href="{{route('create')}}" class="btn-primary">Add Product</a>
            <br /><br /><br />

            <table class="full-width">
                <tr>
                    <th>Product Model</th>
                    <th>Name</th>
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
                        <td>{{$product->fuel_type}}</td>
                        <td>{{$product->cubic_capacity}}</td>
                        <td>{{$product->number_of_seats}}</td>
                        <td>{{$product->color}}</td>
                        <td>
                            <a href="/product/{{$product->id}}">Delete</a>                                                                                                      
                        </td>
                        
                    </tr>
                @endforeach 

            </table>


        </div>
    </div>
   



@endsection