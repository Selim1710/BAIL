@extends('admin.index')

@section('content')

    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Stock</h1>

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
                        <td>{{$customer->user_name}}</td>
                        <td>{{$customer->user_email}}</td>
                        <td>
                            <a href="#">Confirm</a>
                            <a href="#">Cancel</a>
                        </td>
                        
                    </tr>

                @endforeach

            </table>


        </div>
    </div>
   



@endsection