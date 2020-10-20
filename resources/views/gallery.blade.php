@extends('layouts.layout')
@section('content')
 


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

    

 

@endsection