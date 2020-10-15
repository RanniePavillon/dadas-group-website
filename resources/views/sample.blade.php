@extends('layouts.layout')
@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

                <div>
                    <h1>OUR AFFILIATE COMPANIES</h1>
                     
                    
                    
                     @foreach($companies as $company)
                        <div>
                            {{ $company['type']}} - {{$company['base']}}
                        </div>

                    @endforeach 


                    
                    


                </div>

            </div>
        </div>
@endsection
