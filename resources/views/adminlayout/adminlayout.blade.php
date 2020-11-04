<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dadas</title>

        <!-- Links -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
        
        
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>


        <!-- Scripts -->
        <script>
            $(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
            });
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        
        
                

        <style>
            body {
                font-family: 'Nunito';
                
            }
        </style>

    </head>


    <body>
            <!-- navbar -->   
            <div class="vertical-nav bg-dark" id="sidebar">
                <div class=" px-3 mb-2 bg-dark">      
                    <div class="media-body">
                        <p class="text-white mb-0 border-bottom py-3" style="font-size:18px;">
                        <img class="img-fluid px-1" src="{{ asset('img/adminLogo.png') }}" style="width:40px">
                            Administrator
                        </p>
                    </div>      
                </div>

                <ul class="nav flex-column bg-dark mb-0">

                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/adminDashboard" class="nav-link text-light bg-dark rounded mx-1" >
                            <i class="fa fa-dashboard px-1" style="font-size:19px;color:white"></i> 
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <button type="button" class="btn bg-dark text-light text-left rounded rounded mx-1" data-toggle="collapse" data-target="#collapse1" style="width:97%;border-radius:0px;">
                            <i class="fa fa-image px-1" style="font-size:19px;color:white"></i> 
                                Gallery Management
                            <i class="fa fa-angle-down px-1 ml-3" style="font-size:19px;color:white"></i>
                        </button>

                        <div id="collapse1" class="collapse">
                            <button type="button" class="btn bg-dark text-light text-left rounded rounded mx-3 my-2" data-toggle="collapse" data-target="#photo" style="width:93%;border-radius:0px;">
                                <i class="fa fa-angle-right px-1" style="font-size:14px;color:white"></i> 
                                    Photos
                            </button>
                            <div id="photo" class="collapse">
                                <a href="http://127.0.0.1:8000/adminGallery-LagunaBranch" class="nav-link text-light bg-dark ml-4 mr-2 rounded" >
                                    Laguna Branch 
                                </a>
                                <a href="http://127.0.0.1:8000/adminGallery-PangasinanBranch" class="nav-link text-light bg-dark ml-4 mr-2 rounded" >
                                    Pangasinan Branch 
                                </a>
                                <a href="http://127.0.0.1:8000/adminGallery-ParañaqueBranch" class="nav-link text-light bg-dark ml-4 mr-2 rounded" >
                                    Parañaque  Branch 
                                </a>                                
                                <a href="http://127.0.0.1:8000/adminGallery-Phase4Branch" class="nav-link text-light bg-dark ml-4 mr-2 rounded" >
                                    Phase 4 Branch 
                                </a>
                                <a href="http://127.0.0.1:8000/adminGallery-PasigBranch" class="nav-link text-light bg-dark ml-4 mr-2 rounded" >
                                    Pasig  Branch 
                                </a>
                                <a href="http://127.0.0.1:8000/adminGallery-TaguigBranch" class="nav-link text-light bg-dark ml-4 mr-2 rounded" >
                                    Taguig  Branch 
                                </a>
                            </div>

                            <button type="button" class="btn bg-dark text-light text-left rounded rounded mx-3 my-2" data-toggle="collapse" data-target="#video" style="width:93%;border-radius:0px;">
                                <i class="fa fa-angle-right px-1" style="font-size:14px;color:white"></i> 
                                    Videos
                            </button>
                            <div id="video" class="collapse">
                                <a href="http://127.0.0.1:8000/adminGallery-videos" class="nav-link text-light bg-dark ml-4 mr-2 rounded" >
                                    Video Lists 
                                </a>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/adminUserAccount" class="nav-link text-light bg-dark rounded mx-1">
                            <i class="fa fa-user-circle-o px-1" style="font-size:19px;color:white"></i> 
                                User Account Management
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link text-light bg-dark">
                            <i class="fa fa-sign-out px-1" style="font-size:19px;color:white"></i> 
                                Log out
                        </a>
                    </li>
                    
                </ul>
            </div>

            <div class="page-content" id="content">

                <!-- Toggle button -->
                <div class="container-fluid bg-white shadow-sm mb-2 py-2">
                <button id="sidebarCollapse" type="button" class="btn rounded px-4 my-2 border-0">
                    <small class="text-uppercase font-weight-bold"><i class="fa fa-bars" style="font-size:16px;background-color:#F5F5F5;color:black"></i></small>
                </button>
                <h6 class="float-right">
                    <i class="fa fa-male px-1" style="font-size:19px;color:black"></i> 
                    Admin
                </h6>
                </div>
            <!-- Page content -->

            </div>        
        
            @yield('content')

 
    </body>
</html>