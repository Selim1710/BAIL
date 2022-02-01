<!-- Menu starts here -->

<div class="menu text-right">

    <h1 class="text-left">BAIL-Admin panel</h1>

    <div class="wrapper">
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('product.index')}}">Product</a></li>
            <li><a href="{{route('order.index')}}">Order</a></li>
            <li><a href="{{route('stock.index')}}">Stock</a></li>

            <li><a href="#">More</a>

                <div class="sub_menu_1">
                    <ul>

                        <li><a href="{{route('accessories.index')}}">Add Accessory</a></li>
                        <li><a href="{{ route('accessorires.stock.table') }}">Accessory Stock</a></li>
                        <li><a href="{{ route('admin.manage.accessory.order') }}">Accessory Order</a></li>
                        <li><a href="{{route('customer.list')}}">Customer</a></li>
                        <li><a href="{{route('customer.block.list')}}">BlockList</a></li>

                        <li><a href="#">Supplier</a></li>
                        <li><a href="#">Employee</a></li>
                        <li><a href="{{route('admin.logout')}}">Logout</a></li>
                    </ul>
                </div>

            </li>

        </ul>
    </div>
</div>
<!-- Menu ends here -->