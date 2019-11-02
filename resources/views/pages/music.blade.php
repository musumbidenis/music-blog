@extends('layouts.app')

@section('content')
<!-- #### Banner #### -->    
<div class="banner-music" style="background-image: url(img/music.jpg);">
</div>
<!-- #### Banner #### -->
<div class="music-download">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <p>Download Dave's Music</p>
                    <h2>Music Download</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #### Songs download start #### -->
<div class="container-fluid download-section">
    @if (count($songs)> 0)
        @foreach ($songs as $song)
            <div class="row item">
                <div class="col-12">
                    <div class="card wow fadeInUp" data-wow-delay="500ms">
                       <div class="card-horizontal">   
                           <img class="float-left" src="images/{{$song->image}}" alt="">
                              <P class="paragraph">
                              <b>Song title:</b> {{$song->title}}    <br>
                              <b>Artist:</b> {{$song->artist}}      <br>
                              <b>Genre:</b> {{$song->genre}}        <br>
                              <b>Released:</b> {{$song->released}}  <br>
                                <audio preload="auto" controls class="audio">
                                <source src="songs/{{$song->audio}}">
                                </audio>
                              </P>
                        </div>
                    </div>
                </div>
            </div>                 
        @endforeach  
        @else
        <div class="col-12 text-center">
            <p style="font-size:20px;padding:20px;">No files were found.Sorry for the inconvenience, our technical team
            will resolve the issue shortly.
            </p>                    
        </div>                
    @endif
</div>
<!-- #### Songs download end #### -->
<!-- #### Contact Area #### -->
    @include('inc.cf')
@endsection

