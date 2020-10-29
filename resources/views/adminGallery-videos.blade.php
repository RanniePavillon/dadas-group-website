@extends('adminlayout.adminlayout')
@section('content')
<div class="page-content" id="content">
    <div class="container-fluid py-5 bg whitetext-center">
        <h3 class="text-left mx-3">Gallery</h3>

        <div class="container bg-white shadow py-2 my-3 rounded border"> 
                <button type="button" class="btn btn-primary">Add video</button> 
                <p class="my-2">J.P. Rizal, Cabuyao Laguna Branch</p>

                <table id="example" class="table table-bordered mt-2 " >
                    <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Video</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td><p>1</p></td>
                        <td><img class="" src="{{ asset('img/dadas3.PNG') }}" style="width:20%"></td>
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                    <tr>
                        <td><p>2</p></td>
                        <td><img class="" src="{{ asset('img/dadas2.PNG') }}" style="width:20%"></td>
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                    <tr>
                        <td><p>3</p></td>
                        <td><img class="" src="{{ asset('img/dadas1.PNG') }}" style="width:20%"></td>
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                    

                    </tbody>
                    
                </table>    
        
        </div>

        
            
    </div>
</div>




@endsection