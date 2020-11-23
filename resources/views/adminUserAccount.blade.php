@extends('layouts.adminlayout')
@section('content')
<div class="page-content" id="content">
    <div class="container-fluid py-5 bg whitetext-center">
        <h3 class="text-left mx-3">USER ACCOUNT</h3>

        <div class="container bg-white shadow py-2 rounded border">
            <table class="table table-bordered mt-2 ">
                <thead class="thead-dark">
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Administrator</td>
                    <td>Admin123</td>
                </tr>
                </tbody>
                
            </table>
        
        </div>

        <div class="container py-2 my-4">
            <div class="row">
                <div class="col-sm-5">
                    <div class="card shadow-lg mx-auto py-3 px-3" style="border-radius:10px">
                        <div class="card-body">
                        <h5>Edit Info</h5>
                        <form method="POST" action="{{route('contact.submit')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required >
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                </div>
                                <input type="submit" class="btn btn-danger px-4" value="Save" >
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </div>
</div>




@endsection