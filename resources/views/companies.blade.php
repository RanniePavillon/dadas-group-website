@extends('layouts.layout')
@section('content')
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
                                <li class="nav-item"><a href="http://127.0.0.1:8000/companies" class="nav-link text-uppercase font-weight-bold" id="active">Companies</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/career" class="nav-link text-uppercase font-weight-bold">Careers</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/blogs" class="nav-link text-uppercase font-weight-bold">News/Blogs</a></li>
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
        

  
    <!-- Card Grid 1 -->
        <div class="container">
            <p class="title">OUR AFFILIATE COMPANIES</p>
        </div>
        
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-sm  ">
                    <div class="card bg-white shadow p-3 mx-auto h-100" style="width:100%;border-radius:10px">
                        <img class="card-img-top mx-auto py-4 " src="{{ asset('img/dadas1.PNG') }}" alt="Card image" style="width:30%">
                        <h4 class="card-title">Dadas Litson</h4>
                        <div class="card-body text-center">
                            <p class="card-text">Dadas Litson is well known in the food industry selling Litson Manok and Liempo (Roasted Chicken and Liempo). It also offer other products such asFried Chicken, Chicken Inasal, Inihaw na Bangus, Special Atsara, Barbeque,Litson Paksiw,Roasted Boneles Belly, and the tastiest and crispiest Pinoy Litson Baboy.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card bg-white shadow p-3 mx-auto h-100" style="width:100%;border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/dadas2.PNG') }}" alt="Card image" style="width:30%">
                        <h4 class="card-title">Dadas Market</h4>
                        <div class="card-body text-center">
                            <p class="card-text">Dadas Market offers a wide range of fresh produce, poultry, meat, and pork products at Palengke prices delivered right at your doorsteps.</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm ">
                    <div class="card bg-white shadow p-3 mx-auto h-100" style="width:100%;border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/dadas3.PNG') }}" alt="Card image" style="width:30%">
                        <div class="card-body text-center">
                            <h4 class="card-title">Dadas Eats</h4>
                            <p class="card-text">Looking for sumptous and nutritious snacks at an affordable price? Dadas Eats gets you covered with a wide array of delicious snacks and refreshments at a very economical price. You can choose from a variety of snacks from Siomai, Siopao, Chicken Burger, Asado Pandesal, Beef Burger, Beef Shawarma, Chicken Shawarma, and various refreshment such as Milkteas and Sodas.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card bg-white shadow p-3 mx-auto h-100" style="width:100%;border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/dadas4.PNG') }}" alt="Card image" style="width:30%">
                        <div class="card-body text-center">
                            <h4 class="card-title">Dadas Roast</h4>
                            <p class="card-text">Oven-grilled Litson Manok and Liempo at a very affordable price? Dadas Roast is here to serve your cravings. Get this oven-grilled products any time any day from Dadas Roast- one of the leading dealer of oven-grilled Chicken and Liempo.</p>
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
                                <li ><a href="http://127.0.0.1:8000/companies" class="footerLink" id="activeFooterLink" >Companies</a></li>
                                <li ><a href="http://127.0.0.1:8000/career" class="footerLink">Careers</a></li>
                                <li ><a href="http://127.0.0.1:8000/blogs" class="footerLink">News/Blogs</a></li>
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
