@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Customer</h1>

        <br />

        <!-- Message -->
        @if(session()->has('error'))
        <p style="background-color: red;width:100%;padding:2%;">{{ session()->get('error') }}</p>

        @endif
        @if(session()->has('message'))
        <p style="background-color: green;width:100%;padding:2%;">{{ session()->get('message') }}</p>
        @endif
        <br />

        <!-- button to add customer -->
        <a href="#" class="btn-primary">See Customer &rarr;</a>
        <br /><br /><br />

        <div class="search">
            <form action="">
                <input type="search" name="search" placeholder="Enter Name Or Email">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </form>
        </div>
        <br>


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
                    <a href="{{ route('admin.remove.customer',$customer->id) }}" class="btn-danger">Remove</a>
                </td>

            </tr>

            @endforeach

        </table>


    </div>
</div>




@endsection