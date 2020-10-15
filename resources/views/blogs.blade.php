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
                                <li class="nav-item"><a href="http://127.0.0.1:8000/blogs" class="nav-link text-uppercase font-weight-bold" id="active">News/Blogs</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/gallery" class="nav-link text-uppercase font-weight-bold">Gallery</a></li>
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
        

        <!-- Blogs -->
        <div class ="container-fluid py-5">
            <div class="container">
                <div class="row">
                <div class="col-sm">
                    <div class="text-center">      	
                    <img src="{{ asset('img/blog1.PNG') }}" style="width:80%"  height="200"> 
                    </div>
                </div>
                <div class="col-sm ">
                    <h4>BOOST YOUR IMMUNITY! FIGHT COVID-19</h4>
                    <p>
            Since the onset of COVID- 19 last December 2019, to date no cure or vaccine was discovered. Millions of lives was affected by this pandemic, therefore, it is of equal  	  	
                    <a href="https://blogs.dadasgroup.com/boost-your-immunity-fight-covid-19/" class="bloglink">… read more</a>
                    <br>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-envelope-o"></a>	
                    </p>
                </div>
                </div>
                <br>
                <div class="row">
                <div class="col-sm">
                    <div class="text-center">      	
                    <img src="{{ asset('img/blog2.PNG') }}" style="width:80%"  height="200"> 
                    </div>
                </div>
                <div class="col-sm ">
                    <h4>DADAS GCQ PROMO</h4>
                    <p>
            The Covid 19 pandemic in one of the immense problem not only in the Philippines but also in the whole world. This pandemic afflicts our life styles,business, source of Income,
                    <a href="https://blogs.dadasgroup.com/newnormalfooddelivery/" class="bloglink">… read more</a>	
                    <br>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-envelope-o"></a>
                    </p>
                </div>
                </div>
            </div>
        </div>

        <div class="container text-center my-5">
            <a href="https://blogs.dadasgroup.com/" class="contactButton" >Read More...</a>
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
                                <li ><a href="http://127.0.0.1:8000/blogs" class="footerLink" id="activeFooterLink">News/Blogs</a></li>
                                <li ><a href="http://127.0.0.1:8000/gallery" class="footerLink">Gallery</a></li>
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