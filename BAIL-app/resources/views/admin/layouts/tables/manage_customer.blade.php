@extends('admin.index')

@section('content')

    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Customer</h1>

            <br /><br />

            <!-- button to add customer -->
            <a href="#" class="btn-primary">See Customer &rarr;</a>
            <br /><br /><br />

            <table class="full-width">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                @foreach($customers as $key=>$customer)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>
                            <a href="#">Remove</a>
                        </td>
                        
                    </tr>

                @endforeach

            </table>


        </div>
    </div>
   



@endsection