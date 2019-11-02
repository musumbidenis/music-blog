@extends('layouts.app')

@section('content')
<!-- ####Banner#### -->
<div class="banner" style="background-image: url(img/header.jpg);">
    <div class="container">
        <div class="banner-text">
           <div class="banner-heading wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">
               Dave to the world!
           </div>
           <div class="banner-sub-heading wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
               Want more of his music?
           </div>
        <button type="button" data-toggle="modal" data-target="#Modal" class="btn-lg btn-warning text-dark btn-banner wow fadeInUp" data-wow-delay=".7s" data-wow-delay="500ms">Book Him</button>
            <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="ModalLabel">Booking</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="{{url('/book')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                
                                <div class="row">
                                    <div class="col-12">
                                       <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="E-mail address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="tel" placeholder="Tel No" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" cols="5" rows="10" placeholder="Event description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn submit" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                        </form>
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ####Banner#### -->
<!--##### About Start ##### -->
<div class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <p>About Kaka Dave</p>
                    <h2>Artist Biography</h2>
                </div>
                <div class="text-center">
                    <p style="font-size:16px; text-align:justify;">
                        Davis John Kahindi born in 1999, in the coastal town of Mombasa,kenya. He developed his 
                        passion for  music in 2010 when he was in class five. Davis is a friendly person and 
                        loves socializing. Recorded his first song in the year 2013. However, this song didnt do well in the local 
                        music charts but he managed to gain a number of fans who supported his artistic work. He proceeded 
                        to Kilifi Township High School for his secondary education having successfully completed primary school.
                        It is at Kilifi Township High School that Davis ventured fully in music and recorded more songs.
                        We can say without doubt, Davis was naturally drawn to music. Recording the songs was quite an uphill task
                        for him then, but his perseverance conquered it all.
                        In his highschool days he was the nightingale of Kilifi Town. Rallies en Concerts were definitly his,
                        He just 'killed' the shows. In the year 2016 he was honoured with the <b>Wildlife Award </b> after 
                        his song <b>Msitu wa Sokoke </b> won the hearts of many and was a hit song in Sokoke. The song was 
                        advocating for the conservation of our forest cover. Kaka Dave was the name that Kilifi County residents wanted
                        to here following the release of the song. He used every oportunity that presented itself to showcase his 
                        musci work including performing during school rallies, parents meetings and the school's AGM. <br>

                        He completed his highschool education in the year 2017 and later joined Multimedia 
                        University of Kenya to pursue a Bachelor's  degree in Applied Communication. It is in 
                        MMU where he released the song <b> Dame wa Chafua </b> which went on to become 
                        a campus theme song. The song made him among the most influential students in the campus.
                        Besides music, Kaka Dave is also a great Actor taking part in quite a number of plays.
                        Currently Davis alias Kaka Dave is a musician signed under <b> Blac Jac records </b> located in Kabete waiyaki Way.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--##### About End ##### -->
<!-- ##### Latest Songs Start ##### -->
<section class="music-area has-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <p>See What’s New</p>
                    <h2 style="padding-bottom:30px;">Latest Hit Songs</h2>
                </div>
            </div>
        </div>
    <div class="row">
        @if (count($songs)> 0)
            @foreach ($songs as $song)
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="song-area wow fadeInUp" data-wow-delay="500ms">
                        <div class="song-img">
                            <img src="images/{{$song->image}}" alt="">
                        </div>
                        <div class="song-info">
                            <a href="/music">
                            <h5>{{$song->title}}</h5>
                            </a>
                            <p><small><b>Artist:</b> {{$song->artist}}</small> <br></p>   
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
    <div class="col-12 text-center">
        <a href="/music" class="btn loadmore wow fadeInUp" data-wow-delay="800ms">Load More<i class="fa fa-angle-double-right"></i></a>
    </div>
  </div>
</div>
</section>
<!-- ##### Latest Songs End ##### -->
<!-- #### Contact Area #### -->
@include('inc.cf')
@endsection