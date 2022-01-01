<br><br>


<h1 style="margin:2%;text-align:center;">See Product Details</h1>


<img src="{{url('/uploads/product/'.$product->image_path)}}" style="height:50%; width:50%; margin-left:30%;">


<div style="margin-left:10%;margin-bottom:7%; text-align:center;">
    <h1>Product Details:</h1>
    <h2>Models: {{$product->product_model}}</h2>
    <h2>Name: {{$product->name}}</h2>
    <h2>Price:{{$product->product_price}}</h2>
    <h2>Total Produce:{{$product->total_produce}}</h2>
    <br>
    <a href="#" style="padding:1%; background:blue; color:cornsilk; text-decoration:none; border-radius:5px;">Order Now</a>
</div>