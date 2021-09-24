@include('layouts.component.head')
<div class="menubar">
    <div class="menubar-content">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="site-title">
                            <h3 style="color: black">Multimedia</h3>
                        </div><!-- end site-title -->
                    </div><!-- end col-md-4 -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!-- end button -->
                    </div><!-- end navbar-header -->
                    <div class="col-md-10 col-sm-10 navbar-style">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ url('/') }}" style="color: black">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}"style="color: black">Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}"style="color: black">Guru</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}"style="color: black">Hasil Karya</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}"style="color: black">Pelajaran</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}"style="color: black">Berita</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}"style="color: black">Kontak</a>
                                </li>
                            </ul><!-- end nav -->
                        </div><!-- end collapse navbar-collapse -->
                    </div><!-- end col-md-8 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </nav><!-- navbar -->
    </div><!-- end menubar-content -->
</div><!-- end menubar -->
