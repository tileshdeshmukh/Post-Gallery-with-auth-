@extends('layouts.app')

@section('content')
<style>
#social-icons {
  position: fixed;
  z-index: 11;
  left: 0;
  top: 5%;
  background: #202020;
  padding: 20px 20px 10px 15px;
  margin: 0;
  border-radius: 0 8px 8px 0;
  -webkit-border-radius: 0 8px 8px 0;
  -moz-border-radius: 0 8px 8px 0;
}
 
#social-icons a {
  padding: 0;
  clear: both;
  float: left;
  margin-bottom: 10px;
}

/* Below is for display only */



.icon {
  margin: 10px auto;
  display: table;
}

.icon span {
  font-size: 46px;
  position: absolute;
  margin-top: 110px;
  margin-left: 100px;
  font-weight: bold;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container mt-5">
    <div>
        <h4>Post Gallery</h4>
        <hr>
    </div>
    <div class="row">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

        @if(empty($post))
        <p class=""> Data Empty.....! </p>
    @else
            @foreach($post as $posts)
            <div class="col-lg-4 col-md-4 col-sm-10 mb-3">  
            <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                <img src="{{ asset($posts->image)}}" class="card-img-top img-fluid" alt="..." >
                <div class="card-body">
                    <h5 class="card-title">Post Text</h5>
                    <?php 
                        $text = substr($posts->text,0,60);

                    ?>
                    <p class="card-text">{{$text}}...</p>
                    <div class="row mx-3 pt-3">
                        <div class="col-md-4">
                        <a href="view/{{$posts->id}}" class="btn btn-outline-info"><i style="font-size:18px; color:black;" class="fa">&#xf06e;</i></a></div>
                        <div class="col-md-4">
                        <a href="/edit/{{$posts->id}}" class="btn btn-outline-success"><i style="font-size:18px; color:black;" class="fa">&#xf044;</i></a></div>
                        <div class="col-md-4">
                        <a onclick="return confirm('Are you sure? This record and it`s details will be permanantly deleted!')" href="/delete/{{$posts->id}}" class="btn btn-outline-danger"><i style="font-size:18px; color:black;" class="fa">&#xf014;</i></a></div>
                    </div>
                </div>
            </div>
            </div>
           @endforeach
        
    </div>
    


<!-- social media options ------------------------------ -->

    <div class="icon mt-5" id="social-icons">
  <a href="#" target="_blank" id="fb">
    <img src="https://cdn1.iconfinder.com/data/icons/inside/PNG/048x048/icontexto-inside-facebook.png" />
  </a>
  <a href="#" target="_blank" id="tw">
    <img src="https://cdn1.iconfinder.com/data/icons/inside/PNG/048x048/icontexto-inside-twitter.png" />
  </a>
  <a href="#" target="_blank" id="yt">
    <img src="https://cdn1.iconfinder.com/data/icons/inside/PNG/048x048/icontexto-inside-youtube.png" />
  </a>
  <a href="#" target="_blank" id="ld">
    <img src="https://cdn1.iconfinder.com/data/icons/inside/PNG/048x048/icontexto-inside-linkedin.png" />
  </a>
  <a href="#" target="_blank" id="ggl">
  <img src="https://cdn1.iconfinder.com/data/icons/inside/PNG/048x048/icontexto-inside-google.png" />
  </a>
  <a href="#" target="_blank" id="rss">
    <img src="https://cdn1.iconfinder.com/data/icons/inside/PNG/048x048/icontexto-inside-rss.png" />
  </a>
</div>



</div>


<script>
    
    const facebookBtn = document.getElementById('fb');
    const youtube = document.getElementById('yt');
    const linkedinBtn = document.getElementById('ld');
    const twitterBtn = document.getElementById('tw');
    const google = document.getElementById('ggl');
    const rss = document.getElementById('rss');   


       // posturl posttitle
       let postUrl = encodeURI(document.location.href);
       let postTitle = encodeURI('{{$posts->title}}');


    facebookBtn.setAttribute("href",`https://www.facebook.com/sharer.php?u=${postUrl}`);
    twitterBtn.setAttribute("href", `https://twitter.com/share?url=${postUrl}&text=${postTitle}`);
    linkedinBtn.setAttribute("href", `https://www.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}`);
    google.setAttribute("href", `https://plus.google.com/share?url=${posturl}`);
</script>
@endif
@endsection
