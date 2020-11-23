@extends('layouts.adminlayout')
@section('content')
<div class="page-content" id="content">
    <div class="container-fluid py-5 bg whitetext-center">
        <h3 class="text-left mx-3">Gallery</h3>

        <div class="container bg-white shadow py-2 my-3 rounded border"> 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" style="font-size:18px;color:white"></i> Add image</button> 
                <p class="my-2">FTI SEZ, Taguig Branch</p>

                <table id="example" class="table table-bordered mt-2 " >
                    <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td><p>1</p></td>
                        <td><img class="" src="{{ asset('img/dadas1.PNG') }}" style="width:20%"></td>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit"><i class="fa fa-edit" style="font-size:18px;color:white"></i> Edit</button>
                            <button type="button" class="btn btn-danger"><i class="fa fa-trash" style="font-size:18px;color:white"></i> Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><p>2</p></td>
                        <td><img class="" src="{{ asset('img/dadas2.PNG') }}" style="width:20%"></td>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit"><i class="fa fa-edit" style="font-size:18px;color:white"></i> Edit</button>
                            <button type="button" class="btn btn-danger"><i class="fa fa-trash" style="font-size:18px;color:white"></i> Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><p>3</p></td>
                        <td><img class="" src="{{ asset('img/dadas3.PNG') }}" style="width:20%"></td>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit"><i class="fa fa-edit" style="font-size:18px;color:white"></i> Edit</button>
                            <button type="button" class="btn btn-danger"><i class="fa fa-trash" style="font-size:18px;color:white"></i> Delete</button>
                        </td>
                    </tr>
                    

                    </tbody>
                    
                </table>    
        
        </div>

        
        
        
        
            
    </div>
</div>

<!-- Add Image -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header modal-lg">
          <h4 class="modal-title">Add Image</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container mt-3">
          
            <form action="/action_page.php">
             
             <input type="file" id="myFile" name="filename2">

             <div class="mt-3">
               <button type="submit" class="btn btn-primary"><i class="fa fa-upload" style="font-size:18px;color:white"></i> Upload</button>
             </div>
             
           </form>
           
         </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
</div>

<!-- Edit Image -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header modal-lg">
          <h4 class="modal-title">Edit Image</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container mt-3">
          
            <form action="/action_page.php">
             
             <input type="file" id="myFile" name="filename2">

             <div class="mt-3">
               <button type="submit" class="btn btn-primary"><i class="fa fa-upload" style="font-size:18px;color:white"></i> Update</button>
             </div>
             
           </form>
           
         </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
</div>




@endsection