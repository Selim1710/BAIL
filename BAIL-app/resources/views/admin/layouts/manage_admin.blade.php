@extends('admin.index')

@section('content')


    <!-- Main content section starts here -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1>

            <br /><br />

            <!-- button to add admin -->
            <a href="{{route('add_admin')}}" class="btn-primary">Add admin</a>

            <br /><br /><br />

            <table class="full-width">
                <tr>
                    <th>SL</th>
                    <th>Full neme</th>
                    <th>User name</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>1.</td>
                    <td>Selim Hossain</td>
                    <td>selimhossain</td>
                    <td>
                        <a href="#">Update Admin</a>
                        <a href="#">Delete Admin</a>

                    </td>
                </tr>

                <tr>
                    <td>2.</td>
                    <td>Selim Hossain</td>
                    <td>selimhossain</td>
                    <td>
                        <a href="#">Update Admin</a>
                        <a href="#">Delete Admin</a>

                    </td>
                </tr>

                <tr>
                    <td>3.</td>
                    <td>Selim Hossain</td>
                    <td>selimhossain</td>
                    <td>
                        <a href="#">Update Admin</a>
                        <a href="#">Delete Admin</a>

                    </td>
                </tr>
            </table>


        </div>
    </div>
    <!--Main content section ends here -->



@endsection