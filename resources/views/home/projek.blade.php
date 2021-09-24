<div id="work">
    <div class="work-content">
        <div class="work-grid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="work-title text-center wow fadeIn">
                            <h3>Hasil Karya </h3>
                        </div>
                        <!-- end work-title  -->
                    </div>
                    <!-- end col-md-12  -->
                </div>
                <!-- end row  -->
            </div>
            <!-- end container  -->
        </div>
        <!-- end work-grid  -->
        <div class="work-details">
            <div class="container">
                <ul id="filters" class="clearfix">
                    <li><span class="filter active" data-filter=".filter1, .filter2, .filter3, .filter4">All</span></li>

                @foreach($cat as $data)
                    <li><span class="filter" data-filter=".filter{{$data->id}}">{{$data->category_name}}</span></li>
                    @endforeach
                </ul>
                <div id="portfoliolist">
                    @foreach($foto as $data)
                    <div class="portfolio filter{{$data->category_id}}" data-cat="filter{{$data->category_id}}">
                        <div class="portfolio-wrapper wow fadeIn" data-wow-delay=".2s">
                            <div class="overlay text-center">
                                <div class="overlay-main">
                                    <div class="table-cell">
                                        <a class="fancybox" href="{{url('images/gallery/'.$data->img_name)}}" title="little something about the image"><i class="fa fa-file-image-o work-icon" aria-hidden="true"></i></a>
                                    </div>
                                    <!-- end table-cell  -->
                                </div>
                                <!-- end overlay-main  -->
                            </div>
                            <!-- end overlay  -->
                            <img src="{{url('images/gallery/'.$data->img_name)}}" alt="" />
                        </div>
                        <!-- end portfolio-wrapper  -->
                    </div>
                    <!-- end portfolio-photo  -->
                    @endforeach
                </div>
                <!-- end portfoliolist  -->
            </div>
            <!-- container -->
        </div>
        <!-- end work-details  -->
    </div>
    <!-- end work-content  -->
</div>
