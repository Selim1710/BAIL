<br><br>


<h1 style="margin:2%;text-align:center;">See Accessories Details</h1>


<img src="{{ asset('uploads/accessories/'.$accessory->acc_img) }}" style="height:50%; width:50%; margin-left:30%;">


<div style="margin-left:10%;margin-bottom:7%; text-align:center;">

    <h1>Product Details:</h1>
    <h2>Models: {{ $accessory->accessories_model }}</h2>
    <h2>Name: {{ $accessory->name  }}</h2>
    <h2>Price:{{ $accessory->accessories_details }}</h2>
    
    <br>
    <a href="#" style="padding:1%; background:blue; color:cornsilk; text-decoration:none; border-radius:5px;">Order Now</a>
</div>