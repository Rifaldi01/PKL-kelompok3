@include('layouts.component.header-detail')
    <!doctype html>
<html lang="en">

<!-- Mirrored from tamzidhossain.info/html/pentra-onlinedemo/default.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 06:54:36 GMT -->
<body>
<div class="se-pre-con"></div><!-- ========== PRELOADER ========== -->
<!-- ========== MENUBAR ========== -->

<div class="main-page-content">

    <div class="row">
        <div class="card-body">
            <div class="col-lg-6">
                    <div class="skill">
                        <div class="skill-main">
                            <div class="container">
                                <div class="row" style="margin-left: 250px">
                                    <div class="col-md-12 text-center" style="margin-top: 25px;">
                                        <div class="skill-title text-center wow fadeIn">
                                            <h3 class="">Detail Berita</h3>
                                        </div><!-- end team-title  -->
                                    </div><!-- end col-md-12  -->
                                </div><!-- end row  -->
                                <div class="row skill-row wow fadeIn">
                                    <div class="row">
                                            <div class="col-lg-12" style="margin-top: 17px;">
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <div class="card-body">
                                                            <div class="container">
                                                            <img src="{{url('images/news/'.$berita->img_berita)}}"
                                                                 style="width:35%; height: auto" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="card-body">
                                                            <h3>{{$berita->title}}</h3>
                                                            <p style="text-align: justify">{{$berita->created_at}}</p>
                                                            <br>
                                                            <h4>{{$berita->desc}}</h4>
                                                            <br>
                                                            <a href="{{url('/')}}" style="float: right">Kembali</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div><!-- end row  -->
                            </div><!-- end container  -->
                        </div><!-- end skill-main  -->
                    </div><!-- end skill  -->
                </div>
            </div>
        </div>


    @include('layouts.component.footer')
</div><!-- end main-page -->

<!-- ================================ JQUERY =============================== -->

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/wow-anim.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/form-validator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/contact-form-script.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.scrolly.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.fancybox8cbb.js?v=2.1.5')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.fancybox-buttons3447.js?v=1.0.5')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.fancybox-thumbsf2ad.js?v=1.0.7')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.fancybox-mediac924.js?v=1.0.6')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.fancybox.pack8cbb.js?v=2.1.5')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/fancybox-script.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/mixitup.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
</body><!-- end body -->

<!-- Mirrored from tamzidhossain.info/html/pentra-onlinedemo/default.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 06:55:21 GMT -->
</html><!-- end html -->
