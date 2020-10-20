@extends('layouts.layout')
@section('content')
 
    <!-- Contact -->
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-sm-5">
                <div class="card shadow-lg mx-auto py-5 px-3" style="border-radius:10px">
                    <div class="card-body">
                    <form method="POST" action="{{route('contact.submit')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required >
                            </div>
                            <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" name="msg" id="msg" rows="5" placeholder="Message..." ></textarea>
                            </div>
                            <input type="submit" class="btn btn-danger" vaue="Submit" >
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card border-0 mx-auto bg-light" style="">
                <div class="card-body">
                    <h2 class="card-title">Contact Us Now</h2>
                    <p class="card-text">
                    <b>
                    <i class="fa fa-phone"></i> 0917-459-2075 (Globe) | 0933-866-4742 (Sun)<br>
                    <i class="fa fa-envelope"></i> mail@dadasgroup.com <br>
                    <i class="fa fa-map-marker"></i> #873 H.R Capistrano St., Brgy. Ibayo-Tipas, Taguig City<br>
                    </b>
                    </p>
                </div>
                <div id="map-container-google-8" class="z-depth-1-half map-container-5 text-center" style="height: 300px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7723.883901324968!2d121.08550501436238!3d14.545312243533873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%23873%20H.R%20Capistrano%20St.%2C%20Brgy.%20Ibayo-Tipas%2C%20Taguig%20City!5e0!3m2!1sen!2sph!4v1601956372299!5m2!1sen!2sph" width="450" height="260" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                </div>
            </div>
        </div>
    </div>


@endsection