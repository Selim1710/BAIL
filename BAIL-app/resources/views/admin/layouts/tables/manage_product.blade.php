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
                    <th>ID</th>
                    <th>Product Model</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Product Type</th>
                    <th>Product Details</th>
                    <th>Action</th>
                </tr>
                @foreach($products as $key=>$product)

                    <tr>
                        <td>{{$product->key+1}}</td>
                        <td>{{$product->product_model}}</td>
                        <td>{{$product->name}}</td>
                        <td><img src="{{asset('/images/product/'.$product->image_path)}}" style="width:50px;height:50px" alt=""></td>
                        <td>{{$product->product_type}}</td>
                        <td>{{$product->product_details}}</td>
                       

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