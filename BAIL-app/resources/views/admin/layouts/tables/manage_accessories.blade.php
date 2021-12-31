@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Accessories</h1>

        <br />

        <!-- button to add Accessories -->
        <a href="{{route('accessories.create')}}" class="btn-primary">Add Accessories &rarr;</a>
        <br /><br /><br />
        <div class="search">
            <input type="search" name="search" placeholder="Search Accessories Here">
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </div>
        <br>

        <table class="full-width">
            <tr>
                <th>ID</th>
                <th>Model</th>
                <th>Name</th>
                <th>Image</th>
                <th>Type</th>
                <th>Details</th>
                <th>Price</th>
                <th>Action</th>
            </tr>

            @foreach($accessories as $key=>$accessory)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$accessory->accessories_model}}</td>
                <td>{{$accessory->name}}</td>
                <td><img src="{{url('/uploads/accessories/'.$accessory->acc_img)}}" style="width:50px;height:50px"alt=""></td>
                <td>{{$accessory->accessories_type}}</td>
                <td>{{$accessory->accessories_details}}</td>
                <td>{{$accessory->accessories_price}}</td>


                <td>

                    <a href="{{route('accessories.edit',$accessory->id)}}">Edit &rarr;</a>
                    <a href="{{route('accessories.destroy',$accessory->id)}}">Delete</a>
                </td>


            </tr>
            @endforeach



        </table>


    </div>
</div>




@endsection