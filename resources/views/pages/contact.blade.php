@extends('layouts.app')

@section('content')
<!-- ####Banner#### -->    
<div class="banner-music" style="background-image: url(img/music.jpg);">
</div>
<!-- ####Banner#### -->
<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
<div class="container">
    <div class="row">
        <!-- Contact Form Area -->
            <div class="form-area col-md-6">
                <h1>Write to us</h1>
                <p>
                    Interested in working together. Here are incredible ways to reach us you can simply Mail, Call or just drop a quick message here . And our team will get back to you in less than 24 hours.
                </p><br>
                <form action="{{url('/send')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}              

                    <div class="form-group wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
                        <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="form-group wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group wow fadeInDown" data-wow-delay=".9s" data-wow-duration="500ms">
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Messages" required></textarea>
                    </div>
                    <div class="text-center wow fadeInDown" data-wow-delay="1s" data-wow-duration="500ms">
                        <button class="btn submit" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                    <div class="map-area">
                       <h1>Find Us</h1>
                       <p>Our feed back desk is waiting to engage and hear from you, kindly get in 
                        touch for enquiries and seek clarifications. Equally you can reach us at our
                        offices conveniently. 
                       </p>
                       <div class="col-md-12 col-lg-6">
                       <div class="map">
                           <iframe src="https://maps.google.com/maps?q=shanzu&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600px" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                       </div>
                       </div>
                   </div>
               </div>
           </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

<div class="container">
<div class="row address-details">               
    <div class="col-md-4">
        <div class="address">
            <i class="fa fa-map-marker"></i><br>
            <h5> <br> Shanzu, Kenya<br></h5>
        </div>
    </div>
    <div class="col-md-4">
        <div class="email">
            <i class="fa fa-envelope-o"></i>
            <h5><br/>info@kakadave.com</h5>
        </div>
    </div>
    <div class="col-md-4">
        <div class="phone">
            <i class="fa fa-phone"></i>
            <h5><br>+254713710887</h5>
        </div>
    </div>
</div>
</div>
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