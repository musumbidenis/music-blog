<!-- ##### Contact Area Start ##### -->
    <section class="contact-area" style="background:url(img/contact.jpg) no-repeat fixed center;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center"> 
                        <p  style="color:whitesmoke;">Contact us</p>
                        <h2 style="color:whitesmoke;">Talk to us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="form-area">
                    <form action="{{url('/send')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                   
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Messages" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn submit" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
   <!-- ##### Contact Area End ##### -->
    <!-- ##### Footer Area ##### -->
   <section class="connect">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="title">
                                <p style="text-align:center;"  class="wow fadeInDown" data-wow-delay=".3s" data-wow-delay="500ms">Subscribe for music updates. </p>
                                <h2 style="text-align:center;" class="wow fadeInDown" data-wow-delay=".5s" data-wow-delay="500ms">LET'S STAY IN TOUCH</h2>
                            </div>
                        </div>
                    </div>
            </div>
        <form action="{{url('/subscribe')}}" method="post" enctype="multipart/form-data" class="wow fadeInDown" data-wow-delay=".7s" data-wow-delay="500ms">
            {{ csrf_field() }}

            <div class="input-group subscribe col-sm-6 col-md-6 col-lg-6">
                <input class="form-control" rows="1" name="email" placeholder="Enter your email to join newsletter..." required>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#SubscribeModal">Subscribe</button>
                </div>
            </div>
        </form>
</section>
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
                <li class="list-inline-item"><a href="/gallery">Gallery</a></li>
                <li class="list-inline-item"><a href="/support">Support</a></li>
                <li class="list-inline-item"><a href="/contact">Contact</a></li>
            </ul>
            <p class="copyright">Kaka Dave Music &copy;<script>document.write(new Date().getFullYear());</script></p>
        </footer>
</div>



