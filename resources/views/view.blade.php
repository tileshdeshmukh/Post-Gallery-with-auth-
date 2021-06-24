@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container mt-5">
    <div>
        <h4>View Details</h4>
        <hr>
    </div>
    <div class="row">
 

        
            
            <div class="col-lg-6 col-md-6 col-sm-10">
                <div class="">
                    <img src="{{ asset($view->image)}}" class="img-fluid shadow p-3 mb-5 bg-body rounded" style="border-radius: 25px;" alt="..." width='400' height='400'>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10">
                <div class="">
                    <h4>Your Text</h4>
                    <hr>
                    <p>{{$view->text}}</p>
                </div>
            </div>
        
        
    </div>
</div>
@endsection
