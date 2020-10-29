@extends('adminlayout.adminlayout')
@section('content')
<div class="page-content" id="content">
    <div class="container-fluid py-5 bg whitetext-center">
        <h3 class="text-left mx-3">Gallery</h3>

        <div class="container bg-white shadow py-2 my-1 rounded"> 
            <table class="table table-bordered mt-2 ">
                <button type="button" class="btn btn-primary">Add image</button>
                <thead class="thead-dark">
                <tr>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><img class="" src="{{ asset('img/dadas1.PNG') }}" style="width:30%"></td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                    <td><img class="" src="{{ asset('img/dadas2.PNG') }}" style="width:30%"></td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>

                </tbody>
                
            </table>
        
        </div>        
            
    </div>
</div>




@endsection