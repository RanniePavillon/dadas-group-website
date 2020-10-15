@extends('layouts.layout')
@section('content')
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
        <!-- navbar -->   
            <header class="header">
                <nav class="navbar navbar-expand-lg fixed-top py-1">
                    <div class="container">
                        <a href="#" class="navbar-brand ">
                            <img class="img-fluid" src="{{ asset('img/logo.png') }}">
                        </a>
                        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                        
                        <div id="navbarSupportedContent" class="collapse navbar-collapse">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a href="http://127.0.0.1:8000/" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/companies" class="nav-link text-uppercase font-weight-bold">Companies</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/career" class="nav-link text-uppercase font-weight-bold">Careers</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/blogs" class="nav-link text-uppercase font-weight-bold">News/Blogs</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/gallery" class="nav-link text-uppercase font-weight-bold" id="active">Gallery</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/about" class="nav-link text-uppercase font-weight-bold">About Us</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/contact" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

        <!-- Slideshow -->    
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/img1.jpg') }}"  style="width:100%;height:450px;" >
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/img2.jpg') }}"  style="width:100%;height:450px;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/img3.jpg') }}"  style="width:100%;height:450px;">
                </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>

            </div>
            <a href="https://delivery.dadasgroup.com/category/3" class="button" ><i class="fa fa-shopping-cart"></i> Order Now!</i></a>
        


    <div class="container-fluid text-center py-5 bg-white">
        <div class="btn-group">
            <button type="button" class="btn ">All</button>
            <button type="button" class="btn ">Grand Opening</button>
            <button type="button" class="btn ">CSR</button>
        </div>
    </div>

    <!-- Card Grid 2 -->
    <div class="container-fluid bg-white">
        <div class="container  ">
            <div class="row">
                <div class="col-sm ">
                    <div class="card text-center  my-5 mx-auto h-80 bg-white border-0" style="width:80%;">
                        <img class="card-img-top" src="{{ asset('img/gallery1.PNG') }}" alt="Card image" style="width:100%;height:30%;">
                        <div class="card-body">
                            <h5 class="card-title">Grand Opening</h5>
                            <p class="card-text">J.P. Rizal, Cabuyao Laguna Branch</p>
                            <a href="#" class="btn btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                     <div class="card text-center  my-5 mx-auto h-80 bg-white border-0" style="width:80%;">
                        <img class="card-img-top" src="{{ asset('img/gallery2.PNG') }}" alt="Card image" style="width:100%;height:30%;">
                        <div class="card-body">
                            <h5 class="card-title">Grand Opening</h5>
                            <p class="card-text">Lingayen Pangasinan Branch</p>
                            <a href="#" class="btn btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card text-center  my-5 mx-auto h-80 bg-white border-0" style="width:80%;">
                        <img class="card-img-top" src="{{ asset('img/gallery3.PNG') }}" alt="Card image" style="width:100%;height:30%;">
                        <div class="card-body">
                            <h5 class="card-title">Grand Opening</h5>
                            <p class="card-text">Fourthestate, Parañaque Branch</p>
                            <a href="#" class="btn btn-danger">See more</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm ">
                    <div class="card text-center  my-5 mx-auto h-80 bg-white border-0" style="width:80%;">
                        <img class="card-img-top" src="{{ asset('img/gallery4.PNG') }}" alt="Card image" style="width:100%;height:30%;">
                        <div class="card-body">
                            <h5 class="card-title">Grand Opening</h5>
                            <p class="card-text">BS Phase 4 Branch</p>
                            <a href="#" class="btn btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card text-center  my-5 mx-auto h-80 bg-white border-0" style="width:80%;">
                        <img class="card-img-top" src="{{ asset('img/gallery5.PNG') }}" alt="Card image" style="width:100%;height:30%;">
                        <div class="card-body">
                            <h5 class="card-title">Grand Opening</h5>
                            <p class="card-text">JElisco Road, Pasig Branch</p>
                            <a href="#" class="btn btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card text-center  my-5 mx-auto h-80 bg-white border-0" style="width:80%;">
                        <img class="card-img-top" src="{{ asset('img/gallery6.PNG') }}" alt="Card image" style="width:100%;height:30%;">
                        <div class="card-body">
                            <h5 class="card-title">Grand Opening</h5>
                            <p class="card-text">FTI SEZ, Taguig Branch</p>
                            <a href="#" class="btn btn-danger">See more</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm ">
                    <div class="card text-center  my-5 mx-auto h-80 bg-white border-0" style="width:80%;">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/XHOmBV4js_E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Sarap Saya ng Kainan ng Pamilya Hagonoy Taguig Branch</p>
                            <a href="#" class="btn btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card text-center  my-5 mx-auto h-80 bg-white border-0" style="width:80%;">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/XHOmBV4js_E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                       <div class="card-body">         
                            <p class="card-text">Sarap Saya ng Kainan ng Pamilya Cainta Rizal Branch</p>
                            <a href="#" class="btn btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card text-center  my-5 mx-auto h-80 bg-white border-0" style="width:80%;">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/XHOmBV4js_E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">                          
                            <p class="card-text">Sarap Saya ng Kainan ng Pamilya Ususan Taguig Branch</p>
                            <a href="#" class="btn btn-danger">See more</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    

    <!-- Footer -->
    <div class="container-fluid py-5 px-5" style="background-color: rgb(165, 1, 1)">
        <div class="row">
            <div class="col-sm text-white">
                <h2><b>DadasGroup</b></h2>
                <p>Make the best product for people</p>
            </div>
            <div class="col-sm-3 text-white">
                <h4>QUICK LINKS</h4>
                            <ul class="footerList">
                                <li ><a href="http://127.0.0.1:8000/" class="footerLink" >Home <span class="sr-only">(current)</span></a></li>
                                <li ><a href="http://127.0.0.1:8000/companies" class="footerLink"  >Companies</a></li>
                                <li ><a href="http://127.0.0.1:8000/career" class="footerLink" >Careers</a></li>
                                <li ><a href="http://127.0.0.1:8000/blogs" class="footerLink" >News/Blogs</a></li>
                                <li ><a href="http://127.0.0.1:8000/gallery" class="footerLink" id="activeFooterLink">Gallery</a></li>
                                <li ><a href="http://127.0.0.1:8000/about" class="footerLink">About Us</a></li>
                                <li ><a href="http://127.0.0.1:8000/contact" class="footerLink">Contact</a></li>
                            </ul>
            </div>
            <div class="col-sm text-white">
                <h4>REACH US</h4>
                <p>	
                Mobile<br>
                0917-459-2075 (Globe) |
                0933-866-4742 (Sun)<br><br>
                Email<br>
                mail@dadasgroup.com<br><br>
                Address<br>
                #873 H.R Capistrano St., Brgy. Ibayo-Tipas, Taguig City
                </p>
            </div>
            <div class="col-sm text-white">
                <h4>NEWSLETTER</h4>
                <p>Please enter your email, we will send interesting promotions and blogs to you.</p>
                <input type="email" class="my-2 round" id="email" placeholder="Input your email." name="email"><br>
                <button type="submit" class="btn btn-light px-5">Send</button>
            </div>
        </div>
    </div>
    <div class="container-fluid text-right" style="background-color: rgb(165, 1, 1)">
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fa fa-arrow-circle-up' style='font-size:24px'></i></button>
    </div>
    <div class="container-fluid py-5 px-5 text-center" style="background-color:  #800000">
        <div class="row">
            <div class="col-sm text-white">
                <p>© 2020 All Rights Reserved By DadasGroup</p>
            </div>
        </div>
    </div>


@endsection