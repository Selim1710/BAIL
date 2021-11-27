@extends('admin.index')

@section('content')

    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Accessories</h1>

            <br /><br />

            <!-- button to add Accessories -->
            <a href="{{route('accessories.create')}}" class="btn-primary">Add Accessories &rarr;</a>
            <br /><br /><br />

            <table class="full-width">
                <tr>
                    <th>ID</th>
                    <th>Accessories Model</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Accessories Type</th>
                    <th>Accessories Details</th>
                    <th>Action</th>
                </tr>
               

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                       

                        <td>

                            <a href="#">Edit &rarr;</a> 
                            <a href="#">Delete</a>                                                                                                      
                        </td>
                        
                        
                    </tr>
                

            </table>


        </div>
    </div>
   



@endsection