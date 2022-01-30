@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>Customer Block List </h1>

        <br />

        <table class="full-width">
            <tr>
                <th>SL</th>
                <th>Email</th>
            </tr>
            @foreach($blockLists as $blocklist)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$blocklist->email}}</td>
                
            </tr>
            @endforeach

        </table>

    {{ $blockLists->links() }}
    </div>
</div>




@endsection