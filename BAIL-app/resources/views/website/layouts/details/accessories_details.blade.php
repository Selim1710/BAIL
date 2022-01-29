<br><br>


<h1 style="margin:2%;text-align:center;">Our Accessories &rarr;</h1>

@if(session()->has('error'))
<p style="background:red;padding:2%;font-size:1.3rem;width:60%;">{{ session()->get('error') }}</p>

@endif
@if(session()->has('message'))
<p style="background:green;padding:2%;font-size:1.3rem;width:60%;">{{ session()->get('message') }}</p>
@endif


<img src="{{ asset('uploads/accessories/'.$accessory->acc_img) }}" style="height:50%; width:50%; margin-left:30%;">


<div style="margin-left:10%;margin-bottom:7%; text-align:center;">

    <h1>Accessories Details:</h1>
    <h2>Name: {{ $accessory->name  }}</h2>
    <h2>Price:{{ $accessory->accessories_details }}</h2>

    <br>
    <a href="{{ route('user.accessory.order',$accessory->id )}}" style="padding:1%; background:blue; color:cornsilk; text-decoration:none; border-radius:5px;">Order Now</a>
    <a href="{{ route('accessory.add.to.cart',$accessory->id) }}" style="padding:1%; background:green; color:cornsilk; text-decoration:none; border-radius:5px;">Add To Cart</a>

</div>