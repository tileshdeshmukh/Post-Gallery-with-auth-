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
                <div class="card-header bg-info"><strong>Edit Post</strong></div>

                <div class="card-body"> 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                    @foreach($post as $posts)
                    <form class="form" method="post" action="/edit_data/{{$posts->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Text</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text" value="" require>{{ $posts->text }}</textarea>
                        </div>
                       
                        
                        <img src="{{ asset($posts->image)}}" class="img-fluid" alt="..." width="150" height="150">
                        <div class="form-group">
                        <label for="exampleFormControlFile1">Change Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="btn">Submit</button>
                            <a href="/home" class="btn btn-danger" type="button" name="">Back</a>
                        </div>
                    </form>
                    @endforeach
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
