<div id="berita">
    <div class="skill">
        <div class="skill-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="skill-title text-center wow fadeIn">
                            <h3>Berita Multimedia</h3>
                        </div><!-- end team-title  -->
                    </div><!-- end col-md-12  -->
                </div><!-- end row  -->
                <div class="row skill-row wow fadeIn">
                    <div class="row">
                        @foreach($berita as $data)
                            <div class="col-lg-6" style="margin-bottom: 20px;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <img src="{{url('images/news/'.$data->img_berita)}}"
                                                 style="width:100%; height: auto" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <h3>{{$data->title}}</h3>
                                            <p style="text-align: justify">{{$data->info}}</p>
                                            <p>{{$data->created_at}}</p>
                                            <a class="dropdown-item" href="{{url('/detail/'. $data->id)}}" >Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center">
                        {{ $berita->links() }}
                    </div>
                </div><!-- end row  -->
            </div><!-- end container  -->
        </div><!-- end skill-main  -->
    </div><!-- end skill  -->
</div>

