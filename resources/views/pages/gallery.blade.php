@extends('layouts.app')

@section('content')
<!-- ####Banner#### -->    
<div class="banner-music" style="background-image: url(img/music.jpg);">
</div>
<!-- ####Banner#### -->

<div class="container">
    <div class="row">
    <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1 class="gallery-title">Gallery</h1>
    </div>
    <br/>
        @if (count($images)> 0)
        @foreach ($images as $image)
        <div class="gallery_product col-sm-12 col-lg-3 col-md-6 ">
        <img class="rounded" src="gallery_images/{{$image->image}}">
        </div> 
        @endforeach  
        @else
        <div class="col-12 text-center">
            <p style="font-size:20px;padding:20px;">No images were found.Sorry for the inconvenience, our technical team
            will resolve the issue shortly.
            </p>                    
        </div>                
    @endif
    </div>
</div>
</section>
<!-- ##### Footer Area ##### -->
<div class="footer">
<hr>
    <footer>
        <div class="text-center center-block">
            <a href=""><i  class="fa fa-facebook-square fa-3x social"></i></a>
            <a href=""><i  class="fa fa-twitter-square fa-3x social"></i></a>
            <a href=""><i  class="fa fa-google-plus-square fa-3x social"></i></a>
            <a href=""><i  class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="/">Home</a></li>
            <li class="list-inline-item"><a href="/music">Music</a></li>
            <li class="list-inline-item"><a href="/event">Events</a></li>
            <li class="list-inline-item"><a href="/support">Support</a></li>
            <li class="list-inline-item"><a href="/contact">Contact</a></li>
        </ul>
        <p class="copyright">Kaka Dave Music &copy;<script>document.write(new Date().getFullYear());</script></p>
    </footer>
</div>
@endsection