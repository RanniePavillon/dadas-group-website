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
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>



        <!-- Scripts -->
        <script>
            $(function () {
                $(window).on('scroll', function () {
                    if ( $(window).scrollTop() > 10 ) {
                        $('.navbar').addClass('active');
                    } else {
                        $('.navbar').removeClass('active');
                    }
                });
            });
        </script>
        
        <script>
        
            var mybutton = document.getElementById("myBtn");

            function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            }
        </script>
        <script>
            var code;
            function createCaptcha() {
            //clear the contents of captcha div first 
            document.getElementById('captcha').innerHTML = "";
            var charsArray =
            "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
            var lengthOtp = 6;
            var captcha = [];
            for (var i = 0; i < lengthOtp; i++) {
                //below code will not allow Repetition of Characters
                var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
                if (captcha.indexOf(charsArray[index]) == -1)
                captcha.push(charsArray[index]);
                else i--;
            }
            var canv = document.createElement("canvas");
            canv.id = "captcha";
            canv.width = 100;
            canv.height = 50;
            var ctx = canv.getContext("2d");
            ctx.font = "25px Georgia";
            ctx.strokeText(captcha.join(""), 0, 30);
            //storing captcha so that can validate you can save it somewhere else according to your specific requirements
            code = captcha.join("");
            document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
            }
            function validateCaptcha() {
            event.preventDefault();
            debugger
            if (document.getElementById("cpatchaTextBox").value == code) {
                    $("#warning").text("");
                    $("#success-alert").show();
                    setTimeout(function() { $("#success-alert").hide(); }, 5000);
            }else{
                $("#warning").text("Invalid captcha, try again.");
                createCaptcha();
            }
            }
        </script>

        <style>
            body {
                font-family: 'Nunito';
                
            }
        </style>

    </head>


    <body onload="createCaptcha()">
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
                                <li class="nav-item active"><a href="http://127.0.0.1:8000/" class="nav-link text-uppercase font-weight-bold" >Home <span class="sr-only">(current)</span></a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/companies" class="nav-link text-uppercase font-weight-bold">Companies</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/career" class="nav-link text-uppercase font-weight-bold">Careers</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/blogs" class="nav-link text-uppercase font-weight-bold">News/Blogs</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/gallery" class="nav-link text-uppercase font-weight-bold">Gallery</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/about" class="nav-link text-uppercase font-weight-bold">About Us</a></li>
                                <li class="nav-item"><a href="http://127.0.0.1:8000/contact-us" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
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
        
            @yield('content')

            <!-- Footer -->
            <div class="container-fluid py-5 px-5" style="background-color: rgb(165, 1, 1)">
                <div class="row">
                    <div class="col-sm text-white">
                        <h4 class="footerTitle"><b>DadasGroup</b></h4>
                        <p class="footerText">Make the best product for people</p>
                    </div>
                    <div class="col-sm-3 text-white">
                        <h4 class="footerTitle">QUICK LINKS</h4>
                                    <ul class="footerList">
                                        <li class="footerText"><a href="http://127.0.0.1:8000/" class="footerLink" >Home <span class="sr-only">(current)</span></a></li>
                                        <li class="footerText"><a href="http://127.0.0.1:8000/companies" class="footerLink">Companies</a></li>
                                        <li class="footerText"><a href="http://127.0.0.1:8000/career" class="footerLink">Careers</a></li>
                                        <li class="footerText"><a href="http://127.0.0.1:8000/blogs" class="footerLink">News/Blogs</a></li>
                                        <li class="footerText"><a href="http://127.0.0.1:8000/gallery" class="footerLink">Gallery</a></li>
                                        <li class="footerText"><a href="http://127.0.0.1:8000/about" class="footerLink">About Us</a></li>
                                        <li class="footerText"><a href="http://127.0.0.1:8000/contact-us" class="footerLink">Contact</a></li>
                                    </ul>
                    </div>
                    <div class="col-sm text-white">
                        <h4 class="footerTitle" >REACH US</h4>
                        <p class="footerText">	
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
                        <h4 class="footerTitle">NEWSLETTER</h4>
                        <p class="footerText">Please enter your email, we will send interesting promotions and blogs to you.</p>
                        <input type="email" class="my-2 round" id="email" placeholder="Input your email." name="email"><br>
                        <button type="submit" class="btn btn-light px-5">Send</button>
                    </div>
                </div>
            </div>

            <div class="container-fluid text-right" style="background-color: rgb(165, 1, 1)">
                <button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fa fa-arrow-circle-up' style='font-size:24px'></i></button>
            </div>

            <div class="container-fluid py-4 px-5 text-center" style="background-color:  #800000">
                <div class="row">
                    <div class="col-sm text-white">
                        <p>© 2020 All Rights Reserved By DadasGroup</p>
                    </div>
                </div>
            </div>
    </body>
</html>