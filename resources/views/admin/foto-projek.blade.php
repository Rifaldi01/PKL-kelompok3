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
                            <option value="">Select Category</option>
                            @foreach($cat as $data)
                                <option value="{{$data->id}}">{{$data->category_name}}</option>
                            @endforeach
                        </select>
                        <label class="form-label mt-4 mb-2">Select Images</label>
                        <input type="file" class="form-control" name="img[]" accept="image/*" multiple>

                    </div>
                    <div class="card-footer">
                        <div class="d-grid">
                            <input type="submit" class="btn btn-sm btn-primary" value="upload">

                        </div>
                    </div>
                </form>
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

