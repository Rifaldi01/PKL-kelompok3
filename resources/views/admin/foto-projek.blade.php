@extends('layouts.admin.master')
@section('konten')



    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Image Uploadify</h6>
            <hr/>
            <div class="card">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <label class="form-label mt-2 mb-2">Select Category</label>
                        <select class="form-select" name="category_id" required>
                            <option value="" >Select Category</option>
                            @foreach($cat as $data)
                                <option value="{{$data->id}}">{{$data->category_name}}</option>
                            @endforeach
                        </select>
                        <label class="form-label mt-3 mb-2">Select Images</label>
                        <input type="file" class="form-control radius-15" name="img" accept="image/*" >

                    </div>
                    <div class="card-footer">
                        <div class="d-grid">
                            <input type="submit" class="btn btn-sm btn-primary" value="upload">

                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Daftar Foto</h6>
                <hr>
                <div class="card">
                    <div class="col-3 ">
                    </div>
                    <div class="card-header">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
                            @foreach($foto as $data)
                            <div class="col">
                                <div class="card col-lg-pull-10">
                                <img src="{{asset('images/gallery/'. $data->img_name)}}" alt="">

                                <div>
                                    <a  onclick="return confirm('yakin mau hapus ?')"  href="{{url('admin/tambah-foto/delete/'. $data->id)}}"class="bx bx-trash">Hapus</a>
                                </div>
                                </div>

                            </div>
                                @endforeach
                        </div>


                    </div>
                    </div>
                </div>
            </div>

        </div>

        @endsection


        @section('head')
            <link href="{{URL::to('assets2/plugins/fancy-file-uploader/fancy_fileupload.css')}}" rel="stylesheet"/>
            <link href="{{URL::to('assets2/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet"/>
        @endsection
        @push('js')
            <script src="{{URL::to('assets2/plugins/fancy-file-uploader/jquery.fileupload.js')}}"></script>
            <script src="{{URL::to('assets2/plugins/fancy-file-uploader/jquery.iframe-transport.js')}}"></script>
            <script src="{{URL::to('assets2/plugins/fancy-file-uploader/jquery.fancy-fileupload.js')}}"></script>
            <script src="{{URL::to('assets2/plugins/Drag-And-Drop/dist/imageuploadify.min.js')}}"></script>

            <script>
                $(document).ready(function () {
                    $(".image-uploadify").imageuploadify();
                });
            </script>
    @endpush

