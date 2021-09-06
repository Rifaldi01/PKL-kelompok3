<div id="berita">
    <div class="skill">
        <div class="skill-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="skill-title text-center wow fadeIn">
                            <h3>Berita</h3>
                        </div><!-- end team-title  -->
                    </div><!-- end col-md-12  -->
                </div><!-- end row  -->
                <div class="row skill-row wow fadeIn">
                    <div class="row">
                        @for ($i = 1; $i<=12 ; $i++)
                            <div class="col-lg-6" style="margin-bottom: 20px;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <img src="{{asset('assets/img/camera1.jpg')}}"
                                                 style="width:100%; height: auto" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <h3>Judul</h3>
                                            <p style="text-align: justify">hahaha hahahah aha ah ha ahasdajsgd gajshdga
                                                dghjasgda asgdjhagd ajshgh</p>
                                            <a href="" class="pull-right">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div><!-- end row  -->
            </div><!-- end container  -->
        </div><!-- end skill-main  -->
    </div><!-- end skill  -->
</div>
