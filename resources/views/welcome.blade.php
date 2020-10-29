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

  
    <!-- Card Grid 1 -->
        <div class="container">
            <p class="title">OUR AFFILIATE COMPANIES</p>
        </div>
        
        <div class="container">
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

    <!-- Career Module -->
        <div class="container-fluid text-center p-3 pb-5 my-5 bg-white ">
            <h1>CAREER</h1>
            <div class="container my-4">
                <div class="row">
                   <div class="col-sm bg-white"></div>
                    <div class="col-sm-5 bg-white">
                        <div class="card mx-auto " style="width:100%;" >
                            <img  class=" mx-auto " src="{{ asset('img/career.PNG') }}" style="width:100%">
                        </div>
                    </div>
                    <div class="col-sm bg-white"></div>
                </div>
            </div>

            <h2 class="font-weight-bold" style = "color:red">Apply Now!!</h2>
            
            <p>
                <b>	Email:</b> dadaslitson@dadasgroup.com <br>
                <b>Cell no.:</b> 0917-459-2075 (Globe) , 0933-866-4742 (Sun) , 977-728-2284 <br>
                <b>Address:</b> 873 HR Capistrano St. Ibayo Tipas Taguig City <br>
            </p>
        </div>


        <div class="container">
            <h1>WHY SHOULD YOU ENJOY OUR PRODUCTS?</h1>
        </div>

    <!-- Card Grid 2 -->
        <div class="container my-5">
            <div class="row">
                <div class="col-sm ">
                    <div class="card bg-white shadow p-2 mx-auto h-100" style="border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/icon1.PNG') }}" alt="Card image" style="width:40%">
                        <div class="card-body text-center">
                            <p class="card-text">An extraordinary food company.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card bg-white shadow p-2 mx-auto h-100" style="border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/icon2.PNG') }}" alt="Card image" style="width:40%">
                        <div class="card-body text-center">
                            <p class="card-text">We deliver on time without compromising product quality.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card bg-white shadow p-2 mx-auto h-100" style="border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/icon3.PNG') }}" alt="Card image" style="width:40%">
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
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/icon4.PNG') }}" alt="Card image" style="width:40%">
                        <div class="card-body text-center">
                            <p class="card-text">You are free to consult us before ordering.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card bg-white shadow p-2 mx-auto h-100" style="border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/icon5.PNG') }}" alt="Card image" style="width:40%">
                        <div class="card-body text-center">
                            <p class="card-text">Great people delivering genuine hospitality.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm ">
                    <div class="card bg-white shadow p-2 mx-auto h-100" style="border-radius:10px">
                        <img class="card-img-top mx-auto py-4" src="{{ asset('img/icon6.PNG') }}" alt="Card image" style="width:40%">
                        <div class="card-body text-center">
                            <p class="card-text">We will provide our best products for you.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Contact -->
        <div class="container-fluid bg-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 py-2 px-2 ">
                        <h2><b>We are here to satisfy your cravings !!!</b></h2>
                        <p1>
                        Dadas is here to provide fresh, healthy, nutritious and great tasting food at reasonable prices. We take pride in having a clean, friendly and convenient environment as we continuously aim to develop and operate highly successful branches by consistently exceeding our Customer’s expectations. We are committed to make the best food products for people as we unceasingly strive for excellence: and being true to our mission and vision of having happy customers, franchisees and others as we continuously yield for togetherness of Filipino families by bringing Una sa Sarap Una sa Saya, Sarap Saya nang Pamilya in every table. We relentlessly adhere in delivering the best customer experience and excellent products for every Filipino families.
                        </p1>
                        <br>
                        <a href="#" class="btn" style="background-color:red;color:white;"><i class="fa fa-phone"></i> Contact Us</i></a>
                    </div>
                    <div class="col-sm">
                        <img src="{{ asset('img/contactImage.PNG') }}" style="width:100%">
                    </div>
                </div>
            </div>
        </div>

    
    <!-- Testimonials -->
        <div class="container text-center">
                <h1>TESTIMONIALS</h1>
                <p>Best Food Products for a better start <br>
                    -Best quality Food Products with best prices
                </p>
        </div>
        <div class="container my-5">
                <div class="row">
                    <div class="col-sm ">
                        <div class="card  p-2 mx-auto h-100 bg-transparent border-0" style="border-radius:10px">
                            <img class="card-img-top mx-auto py-4 rounded-circle" src="{{ asset('img/dadas1.PNG') }}" alt="Card image" style="width:40%">
                            <div class="card-body text-center">
                                <p class="card-text">Dadas una sa sarap, una sa saya. Paborito yan ng anak kung si Aeron, pag umuuwi ako galling sa trabaho tumatawag talaga yan para magpabili.</p>
                            <h5>Ariel Mingi</h5>
                            <h6>Customer</h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm ">
                        <div class="card   p-2 mx-auto h-100 bg-transparent border-0" style="border-radius:10px">
                            <img class="card-img-top mx-auto py-4 rounded-circle" src="{{ asset('img/dadas1.PNG') }}" alt="Card image" style="width:40%">
                            <div class="card-body text-center">
                                <p class="card-text">Masarap at juicy sa loob at labas kahit wala ng sauce, masarap pa rin.</p>
                                <h5>Paula Denoso</h5>
                                <h6>Customer</h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm ">
                        <div class="card   p-2 mx-auto h-100 bg-transparent border-0" style="border-radius:10px">
                            <img class="card-img-top mx-auto py-4 rounded-circle" src="{{ asset('img/dadas1.PNG') }}" alt="Card image" style="width:40%">
                            <div class="card-body text-center">
                                <p class="card-text">Pag-uwi ko galling sa trabaho, lagi talaga akong dumadaan sa branch ng dadas para bumili ng ulam, paborito kasi to ng aking mga anak.</p>
                                <h5>Regulo Evangelista</h5>
                                <h6>Customer</h6>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    

@endsection