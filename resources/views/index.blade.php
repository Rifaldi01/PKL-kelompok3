@extends('layouts.master')
@section('content')
    @include('home.slider')

    <!-- ================================ ABOUT =============================== -->

    @include('home.about')

    <!-- ================================ WORK =============================== -->

  @include('home.projek')

    <!-- ============================================== SERVICE ===================================================== -->

    <div id="service">
        <div id="service-content">
            <div class="service-grid text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="service-title text-center wow fadeIn" data-wow-delay=".2s">
                                <h3>Our Service</h3>
                                <div class="underline"></div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam.</p>
                            </div><!-- end service-title  -->
                        </div><!-- end col-md-12  -->
                    </div><!-- end row  -->
                    <div class="row service-row">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-details wow fadeIn" data-wow-delay=".4s">
                                <i class="fa fa-pencil-square-o service-icon" aria-hidden="true"></i>
                                <h3>HTML5 AND CSS3</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div><!-- end service-details  -->
                        </div><!-- end col-md-4  -->
                        <div class="col-md-4 col-sm-6">
                            <div class="service-details wow fadeIn" data-wow-delay=".6s">
                                <i class="fa fa-cogs service-icon" aria-hidden="true"></i>
                                <h3>Amazing Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div><!-- end service-details  -->
                        </div><!-- end col-md-4  -->
                        <div class="col-md-4 col-sm-6">
                            <div class="service-details wow fadeIn" data-wow-delay=".2s">
                                <i class="fa fa-file-image-o service-icon" aria-hidden="true"></i>
                                <h3>Easily customisable</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div><!-- end service-details  -->
                        </div><!-- end col-md-4  -->
                        <div class="col-md-4 col-sm-6">
                            <div class="service-details wow fadeIn">
                                <i class="fa fa-heart-o service-icon" aria-hidden="true"></i>
                                <h3>Working Contact Form</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div><!-- end service-details  -->
                        </div><!-- end col-md-4  -->
                        <div class="col-md-4 col-sm-6">
                            <div class="service-details wow fadeIn" data-wow-delay=".4s">
                                <i class="fa fa-hourglass service-icon" aria-hidden="true"></i>
                                <h3>24/7 Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div><!-- end service-details  -->
                        </div><!-- end col-md-4  -->
                        <div class="col-md-4 col-sm-6">
                            <div class="service-details wow fadeIn" data-wow-delay=".6s">
                                <i class="fa fa-newspaper-o service-icon" aria-hidden="true"></i>
                                <h3>Bootstrap 3.0.0</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div><!-- end service-details  -->
                        </div><!-- end col-md-4  -->
                    </div><!-- end row  -->
                </div><!-- end container  -->
            </div><!-- end service-grid  -->
        </div><!-- end service-content  -->
    </div><!-- end service  -->

    <!-- ============================================== TEAM ================= -->

    @include('home.team')
    <!-- ================================ PRICING =============================== -->

    <div id="pricing">
        <div class="pricing-content">
            <div class="price-grid text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="price-title text-center wow fadeIn">
                                <h3>Price Plan</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div><!-- end price-title  -->
                        </div><!-- end col-md-12  -->
                    </div><!-- end row  -->
                    <div class="row team-row text-ceenter">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="price-pack wow fadeIn" data-wow-delay=".3">
                                <div class="price-pack-head">
                                    <p><span>$29</span>/Month</p>
                                    <h3>platinum</h3>
                                </div><!-- end price-pack-head  -->
                                <div class="price-pack-body">
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                    </ul>
                                    <a href="#home">join now</a>
                                </div><!-- end price-pack-body  -->
                            </div><!-- end price-pack -->
                        </div><!-- end col-md-4 -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="price-pack wow fadeIn" data-wow-delay=".5">
                                <div class="price-pack-head">
                                    <p><span>$39</span>/Month</p>
                                    <h3>gold</h3>
                                </div><!-- end price-pack-head  -->
                                <div class="price-pack-body">
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                    </ul>
                                    <a href="#home" class="middle">join now</a>
                                </div><!-- end price-pack-body  -->
                            </div><!-- end price-pack -->
                        </div><!-- end col-md-4 -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="price-pack wow fadeIn" data-wow-delay=".7">
                                <div class="price-pack-head">
                                    <p><span>$49</span>/Month</p>
                                    <h3>diamond</h3>
                                </div><!-- end price-pack-head  -->
                                <div class="price-pack-body">
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                    </ul>
                                    <a href="#home">join now</a>
                                </div><!-- end price-pack-body  -->
                            </div><!-- end price-pack -->
                        </div><!-- end col-md-4 -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end price-grid -->
        </div><!-- end price-content -->
    </div><!-- end price -->

    <!-- ================================ TESTIMONIALS ========================== -->

    <div id="testimonial">
        <div class="testimonial-content">
            <div class="testimonial-grid">
                <div class="testimonial-title text-center wow fadeIn">
                    <h3>Testimonials</h3>
                </div><!-- end testimonial-title  -->
                <div class="testimonial-details wow fadeIn">
                    <section id="carousel">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators carousel-indicators1">
                                            <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                            <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="active item">
                                                <div class="profile-circle">
                                                    <img src="img/client1.jpg" alt="" class="circle-img">
                                                </div><!-- end profile-circle -->
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.<br><br><span>John Mack</span></p>
                                                </blockquote>
                                            </div><!-- end item  -->
                                            <div class="item">
                                                <div class="profile-circle">
                                                    <img src="img/client2.jpg" alt="" class="circle-img">
                                                </div><!-- end profile-circle -->
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.<br><br><span>Richi Sina</span></p>
                                                </blockquote>
                                            </div><!-- end item  -->
                                            <div class="item">
                                                <div class="profile-circle">
                                                    <img src="img/client3.jpg" alt="" class="circle-img">
                                                </div><!-- end profile-circle -->
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.<br><br><span>Mahindra</span></p>
                                                </blockquote>
                                            </div><!-- end item  -->
                                        </div><!-- end carousel-inner  -->
                                    </div><!-- end carousel-slide  -->
                                </div><!-- end col-md-8  -->
                            </div><!-- end row  -->
                        </div><!-- end container  -->
                    </section>
                </div><!-- end testimonials-details  -->
            </div><!-- end testimonial-grid  -->
        </div><!-- end testimonial-content  -->
    </div><!-- end testimonial  -->

    <!-- ================================ CONTACT =============================== -->

    <div id="contact">
        <div class="contact-content">
            <div class="contact-grid">
                <div class="contact-form-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2  contact-col">
                                <div class="contact-title text-center ">
                                    <h3>Contact With Us !</h3>
                                    <div class="underline"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div><!-- end contact-title -->
                                <div class="contact-form wow fadeIn">
                                    <form id="contactForm" class="contact-form shake" data-toggle="validator">
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                                <div class="help-block with-errors"></div>
                                            </div><!-- end controls -->
                                        </div><!-- end form-group -->
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                                <div class="help-block with-errors"></div>
                                            </div><!-- end controls -->
                                        </div><!-- end form-group -->
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                                <div class="help-block with-errors"></div>
                                            </div><!-- end controls -->
                                        </div><!-- end form-group -->
                                        <div class="form-group">
                                            <div class="controls">
                                                <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div><!-- end controls -->
                                        </div><!-- end form-group -->
                                        <button type="submit" id="submit" class="btn btn-success"> Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div><!-- end contact-form -->
                            </div><!-- end col-md-8 -->
                        </div><!-- end row -->
                        <div class="row contact-row text-center">
                            <div class="col-md-4 col-sm-4">
                                <div class="contact-col-grid" data-wow-delay=".2s">
                                    <i class="fa fa-map-marker contact-icon" aria-hidden="true"></i>
                                    <h3>Address</h3>
                                    <p>Chittagong,Bangladesh</p>
                                </div><!-- end contact-col  -->
                            </div><!-- end col-md-4  -->
                            <div class="col-md-4 col-sm-4">
                                <div class="contact-col-grid" data-wow-delay=".4s">
                                    <i class="fa fa-envelope contact-icon" aria-hidden="true"></i>
                                    <h3>Email</h3>
                                    <p>Pentra@gmail.com</p>
                                </div><!-- end contact-col  -->
                            </div><!-- end col-md-4  -->
                            <div class="col-md-4 col-sm-4">
                                <div class="contact-col-grid" data-wow-delay=".6s">
                                    <i class="fa fa-mobile contact-icon" aria-hidden="true"></i>
                                    <h3>Phone</h3>
                                    <p>+2863482364</p>
                                </div><!-- end contact-col  -->
                            </div><!-- end col-md-4  -->
                        </div><!-- end row  -->
                    </div><!-- end container -->
                </div><!-- end contact-form-details -->
                <!-- end copyright-details -->
            </div><!-- end contact-grid -->
        </div><!-- end contact-content -->
    </div><!-- end contact -->

@endsection
