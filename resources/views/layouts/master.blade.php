<!doctype html>
<html lang="en">

<!-- Mirrored from tamzidhossain.info/html/pentra-onlinedemo/default.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 06:54:36 GMT -->
@include('layouts.component.head')
<body>
<div class="se-pre-con"></div><!-- ========== PRELOADER ========== -->
<!-- ========== MENUBAR ========== -->
@include('layouts.component.header')
<div class="main-page-content">

    @yield('content')

    @include('layouts.component.footer')
    @include('sweetalert::alert')


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
