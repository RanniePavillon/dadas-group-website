@extends('layouts.layout')
@section('content')


  
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


    
@endsection
