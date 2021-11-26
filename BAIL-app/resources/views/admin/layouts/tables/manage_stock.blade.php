@extends('admin.index')

@section('content')

    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Stock</h1>

            <br /><br />

            <!-- button to add product -->
            <a href="#" class="btn-primary">See Stock &rarr;</a>
            <br /><br /><br />

            <table class="full-width">
                <tr>
                    <th>ID</th>
                    <th>Product Model</th>
                    <th>Name</th>
                    <th>Product Type</th>
                    <th>Current Stock</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>S-1</td>
                    <td>Name</td>
                    <td>cars</td>
                    <td>10</td>
                    <td>edit</td>
                </tr>
                

            </table>


        </div>
    </div>
   



@endsection