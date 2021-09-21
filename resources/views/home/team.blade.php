<div id="team">
    <div class="team-content">
        <div class="team-grid text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="team-title text-center wow fadeIn">
                            <h3>Temukan Team Kami</h3>
                        </div><!-- end team-title  -->
                    </div><!-- end col-md-12  -->
                </div><!-- end row  -->
                <div class="row team-row text-center">
                    @foreach($team as $data)
                    <div class="col-md-3 col-sm-6 team-col">
                        <div class="corporate-team">
                            <div class="team-member wow fadeIn" data-wow-delay=".2s">
                                <img src="{{URL::to('images/gallery/'. $data->image)}}" alt="" class="team-img" style="height: 400px">
                            </div><!-- end team-member  -->
                            <div class="team-details">
                                <h3>{{{$data->name}}}</h3>
                                <h2>{{$data->status}}</h2>
                                <p>{{$data->keahlian}}</p>
                            </div><!-- end team-details  -->
                        </div><!-- end corporate-team  -->
                    </div><!-- end col-md-4  -->
                    @endforeach
                </div><!-- end row  -->
            </div><!-- end container  -->
        </div><!-- end row-grid  -->
        <div class="message1 text-center">
            <div id="message-content1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="message1-client wow fadeIn">
                                <h3>JANGAN KHAWATIR TENTANG JURUSAN</h3>
                                <p>Anda Memilih Jurusan Yang Tepat</p>
                                <a href="#contact">hubungi kami</a>
                            </div><!-- end message-client  -->
                        </div><!-- end col-md-12  -->
                    </div><!-- end row  -->
                </div><!-- end container  -->
            </div><!-- end message-content1  -->
        </div><!-- end work-counter  -->

    </div><!-- end team-content  -->


</div><!-- end team  -->
