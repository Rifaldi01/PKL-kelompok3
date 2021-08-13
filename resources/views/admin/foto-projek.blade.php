@extends('layouts.admin.master')
@section('konten')



<div class="row">
    <div class="col-xl-9 mx-auto">
        <h6 class="mb-0 text-uppercase">Image Uploadify</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <form>
                    <input id="image-uploadify" type="file" accept="image/*" multiple />
                </form>
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
            $("#image-uploadify").imageuploadify();
        });
    </script>
@endpush

