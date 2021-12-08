@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Accessories</h1>

        <br /><br />

        <!-- button to add Accessories -->
        <a href="{{route('accessories.create')}}" class="btn-primary">Add Accessories &rarr;</a>
        <br /><br /><br />

        <table class="full-width">
            <tr>
                <th>ID</th>
                <th>Model</th>
                <th>Name</th>
                <th>Image</th>
                <th>Type</th>
                <th>Details</th>
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


                <td>

                    <a href="#">Edit &rarr;</a>
                    <a href="#">Delete</a>
                </td>


            </tr>
            @endforeach



        </table>


    </div>
</div>




@endsection