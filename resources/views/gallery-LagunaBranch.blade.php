@extends('layouts.layout')
@section('content')
 


    <div class="container-fluid text-center py-5 bg-white">
        <div class="btn-group">
            <h3>J.P. Rizal, Cabuyao Laguna Branch</h3>
        </div>
    </div>

    <!-- Card Grid 2 -->
    <div class="container-fluid bg-white py-5">
        <div class="container  ">
            <h5 class="text-center py-5">PHOTOS</h5>
            <div class="row">
                <div class="col-sm ">
                        <img class="card-img-top" src="{{ asset('img/gallery1.PNG') }}" alt="Card image" style="width:100%;">                 
                </div>
                
                <div class="col-sm ">
                        <img class="card-img-top" src="{{ asset('img/gallery2.PNG') }}" alt="Card image" style="width:100%;">
                </div>
                
                <div class="col-sm ">
                        <img class="card-img-top" src="{{ asset('img/gallery3.PNG') }}" alt="Card image" style="width:100%;">                   
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm ">
                        <img class="card-img-top" src="{{ asset('img/gallery4.PNG') }}" alt="Card image" style="width:100%;">                    
                </div>
                
                <div class="col-sm ">
                        <img class="card-img-top" src="{{ asset('img/gallery5.PNG') }}" alt="Card image" style="width:100%;">                   
                </div>
                
                <div class="col-sm ">
                        <img class="card-img-top" src="{{ asset('img/gallery6.PNG') }}" alt="Card image" style="width:100%;">
                </div>
            </div>
            <br>
            <br>
            <br>
            <h5 class="text-center py-5">VIDEOS</h5>
            <div class="row">
                <div class="col-sm ">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/XHOmBV4js_E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                </div>
                
                <div class="col-sm ">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/XHOmBV4js_E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                </div>
                
                <div class="col-sm ">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/XHOmBV4js_E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                </div>
            </div>

        </div>
    </div>

    

 

@endsection