@extends('layouts.layout')
@section('content')
 
    <!-- Contact -->
    <div class="container-fluid bg-white py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 py-5 px-5 ">
                            <h2><b>Who we are?</b></h2>
                            <p1>
                            <b>
                            We are a group of Extraordinary and Heroic Filipinos who work together, sharing the same values, and helping each other to achieve our Next Big Thing. sExperience is our point of difference. Experience we Holdand the Experiences we Create. We bring together the brightest minds to craft experiences that are Intuitive, Engaging, Impactful and Enlightening. We deliver everything to our clients from digital transformation and user experience to digital marketing. We will work fast and relentlessly to  maintain the quality of our products, because Customer Satisfaction is our top priority.
                            </b>
                            </p1>
                            <br>
                            <a href="#" class="btn" style="background-color:red;color:white;"><i class="fa fa-phone"></i> Contact Us</i></a>
                        </div>
                        <div class="col-sm">
                            <img src="{{ asset('img/about.PNG') }}" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>

       <div class="container text-center my-5">
            <h2>OUR MISSION</h2>
            <h5>Happy customers, franchisees, workforce and others</h5>
        </div>

    <!-- Card Grid 2 -->
    <div class="container-fluid bg-white py-5 text-center">
        <h1>OUR CORE VALUES</h1>
        <div class="container my-5">
            <div class="row">
                <div class="col-sm ">
                    <div class="card bg-white shadow p-2 mx-auto h-100" style="border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/about1.PNG') }}" alt="Card image" style="width:40%">
                        <div class="card-body text-center">
                            <p class="card-text">An extraordinary food company.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card bg-white shadow p-2 mx-auto h-100" style="border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/about2.PNG') }}" alt="Card image" style="width:40%">
                        <div class="card-body text-center">
                            <p class="card-text">We deliver on time without compromising product quality.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card bg-white shadow p-2 mx-auto h-100" style="border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/about3.PNG') }}" alt="Card image" style="width:40%">
                        <div class="card-body text-center">
                            <p class="card-text">Affordable prices with quality products</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm ">
                    <div class="card bg-white shadow p-2 mx-auto h-100" style="border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/about4.PNG') }}" alt="Card image" style="width:40%">
                        <div class="card-body text-center">
                            <p class="card-text">You are free to consult us before ordering.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card bg-white shadow p-2 mx-auto h-100" style="border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/about5.PNG') }}" alt="Card image" style="width:40%">
                        <div class="card-body text-center">
                            <p class="card-text">Great people delivering genuine hospitality.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card bg-white shadow p-2 mx-auto h-100" style="border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/about6.PNG') }}" alt="Card image" style="width:40%">
                        <div class="card-body text-center">
                            <p class="card-text">We will provide our best products for you.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
 



@endsection