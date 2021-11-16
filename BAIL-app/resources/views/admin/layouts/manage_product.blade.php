@extends('admin.index')

@section('content')


    <!-- Main content section starts here -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Product</h1>

            <br /><br />

            <!-- button to add product -->
            <a href="{{route('add_product')}}" class="btn-primary">Add Product</a>

            <br /><br /><br />

            <table class="full-width">
                <tr>
                    <th>Product Model</th>
                    <th>Name</th>
                    <th>Fuel Type</th>
                    <th>Cubic Capacity</th>
                    <th>Number of seats</th>
                    <th>Color</th>
                </tr>
                @foreach($products as $product)

                    <tr>
                        <td>{{$product->product_model}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->fuel_type}}</td>
                        <td>{{$product->cubic_capacity}}</td>
                        <td>{{$product->number_of_seats}}</td>
                        <td>{{$product->color}}</td>
                        
                    </tr>
                @endforeach  
             

                <!-- <tr>
                    <td>1.</td>
                    <td>Selim Hossain</td>
                    <td>selimhossain</td>
                    <td>
                        <a href="#">Update Admin</a>
                        <a href="#">Delete Admin</a>

                    </td>
                </tr> -->

            </table>


        </div>
    </div>
    <!--Main content section ends here -->



@endsection