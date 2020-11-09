@extends('loginlayout.loginlayout')
@section('content')


<div class="container py-5 my-5">
    <h3 class="text-center mt-5">Administrator</h3>
    <div class="row">
        <div class="col-sm-5  mx-auto" >
            <div class="card mx-auto shadow" style="border-radius:14px;">
                <img class="card-img-top mx-auto py-3" src="{{ asset('img/logo.png') }}"  style="width:20%">
                <div class="card-body border">
                    <form action="/action_page.php" class="needs-validation" novalidate>
                        <div class="input-group my-4">
                                <span class="input-group-append bg-white " >
                                    <span class="input-group-text bg-transparent" style="border-radius: 6px 0 0 6px;">
                                     <i class="fa fa-user-circle-o px-1" ></i> 
                                    </span>
                                </span>

                                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" style="border-radius: 0 6px 6px 0;" required>

                        </div>

                        <div class="input-group my-4">
                                <span class="input-group-append bg-white ">
                                    <span class="input-group-text bg-transparent" style="border-radius: 6px 0 0 6px;">
                                        <i class="fa fa-key px-1" ></i> 
                                    </span>
                                </span>
                                
                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" style="border-radius: 0 6px 6px 0;" required>
                                
                        </div>

                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" name="remember" required> Remember me
                            </div>
                            <button type="submit" class="btn btn-danger ">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection