@extends('layouts.adminlayout')
@section('content')
<div class="page-content" id="content">
    <div class="container-fluid py-5 text-center">
            <h3 class="text-left mx-3">DASHBOARD</h3>
            <div class="container my-5">
                
                <div class="row">
                    
                    <div class="col-sm ">
                        <div class="card bg-success text-white shadow  mx-auto h-60" style="border-radius:10px">
                            <div class="card-body text-left">
                                <h2 class="card-title"><b>2</b></h2>
                                <i class="fa fa-camera px-1 float-right" style="font-size:70px;color:#202020;opacity: 0.5;"></i>     
                                <p class="card-text">Photos</p>
                            </div>
                            <a href="#" class="text-center text-white border-top" > More Info <i class="fa fa-arrow-circle-right"></i></a>                        
                        </div>
                    </div>
                    
                    <div class="col-sm ">
                        <div class="card bg-danger text-white shadow  mx-auto h-60" style="border-radius:10px">
                            <div class="card-body text-left">
                                <h2 class="card-title"><b>2</b></h2>
                                <i class="fa fa-video-camera px-1 float-right" style="font-size:70px;color:#202020;opacity: 0.5;"></i>     
                                <p class="card-text">Videos</p>
                            </div>
                            <a href="#" class="text-center text-white border-top" > More Info <i class="fa fa-arrow-circle-right"></i></a>                        
                        </div>
                    </div>
                    
                    <div class="col-sm ">
                        <div class="card bg-info text-white shadow  mx-auto h-60" style="border-radius:10px">
                            <div class="card-body text-left">
                                <h2 class="card-title"><b>2</b></h2>
                                <i class="fa fa-user-plus px-1 float-right" style="font-size:70px;color:#202020;opacity: 0.5;"></i>     
                                <p class="card-text">User Accounts</p>
                            </div>
                            <a href="#" class="text-center text-white border-top" > More Info <i class="fa fa-arrow-circle-right"></i></a>                        
                        </div>
                    </div>

                    

                </div>
                
            </div>
    </div>
</div>



@endsection