@extends('admin.index')

@section('content')

<!-- head -->
<h1 class="text-center">Change Product Image</h1>

<br><br>
<div style="background:grey;padding:1%;width:40%;margin-left:20%;">
    <!-- form -->
    <form action="{{ route('change.product.image',$product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <img src="{{url('/uploads/product/'.$product->image_path)}}" style="height:250px;width:250px;">
        <input type="file" name="image_path" required> <br>
        <div style="padding:1%;margin-left: 55%;">
            <input type="Submit" value="Submit">
        </div>
    </form>
</div>

<br><br><br>

@endsection