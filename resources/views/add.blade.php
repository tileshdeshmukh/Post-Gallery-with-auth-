@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('msg'))
            <div class="alert alert-success ">
                <ul>

                    <li class="h6">{{ Session::get('msg') }}</li>

                </ul>
            </div>
            @endif
            <div class="card">
                <div class="card-header bg-info"><strong>Add Post</strong></div>

                <div class="card-body"> 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                    <form class="form" method="post" action="{{url('/add_data')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Add Some Text</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="btn">POST</button>
                            <a href="/home" class="btn btn-danger" type="button" name="">Back</a>
                        </div>
                    </form>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
