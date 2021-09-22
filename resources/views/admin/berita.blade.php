@extends('layouts.admin.master')
@section('konten')
    <style>
        label {
            font-size: 16px;
        }
    </style>
    <div class="card border-0  border-3 border-end border-bottom radius-15">
        <div class="card-header">
            <h4><i class="bx bx-plus-circle pt-1"></i> Tambah Berita</h4>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-2 mt-2 mb-2">
                        <label class="form-label mt-2 mb-2">Judul Berita</label>
                    </div>
                    <div class="col-lg-10 mt-2 mb-2">
                        <input type="text" class="form-control radius-15" name="title" value="" required placeholder="judul">
                    </div>

                    <div class="col-lg-2 mt-2 mb-2">
                        <label class="form-label mt-2 mb-2">Info</label>
                    </div>
                    <div class="col-lg-10 mt-2 mb-2">
                        <input type="text" class="form-control radius-15" name="info" value="" required placeholder="info">
                    </div>

                    <div class="col-lg-2 mt-2 mb-2">
                        <label class="form-label mt-2 mb-2">Keterangan</label>
                    </div>
                    <div class="col-lg-10 mt-2 mb-2">
                        <textarea type="text" class="form-control radius-15" value="" name="status" required placeholder="keterangan"></textarea>
                    </div>

                    <div class="col-lg-2 mt-2 mb-2">
                        <label class="form-label mt-2 mb-2">Gambar</label>
                    </div>
                    <div class="col-lg-10 mt-2 mb-2">

                        @isset($status)
                            <?php
                            if ($status == 'edit'){
                                $required = '';
                            } else {
                                $required = 'required';
                            }
                            ?>
                        @else
                            <?php
                            $required = 'required';
                            ?>
                        @endisset

                        <input type="file" class="form-control radius-15" accept="image/*" name="img_berita" {{$required}}
                        placeholder="image">
                    </div>
                </div>
                <button class="btn btn-primary btn-sm radius-10 mt-4  float-end pe-3"><i class="bx bx-save pb-1 ps-3"></i>
                    Simpan
                </button>
            </form>
        </div>
    </div>

    <h6 class="mb-0 text-uppercase">Daftar Berita</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="pelanggaran" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>info</th>
                        <th>Keterangan</th>
                        <th width="10%" class="text-center">Aksi</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($berita as $data)
                        <tr>
                            <td>{{$no ++}}</td>
                            <td><img class="img-responsive"  src="{{URL::to('images/news/'. $data->img_berita)}}" style="max-width: 100px; height: auto; border-radius: 100px;" alt=""></td>
                            <td>{{$data->title}}</td>
                            <td>{{$data->info}}</td>
                            <td>{{$data->status}}</td>
                            <td><div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Primary</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" onclick="return confirm('yakin mau hapus ?')" href="{{url('admin/berita/delete/'. $data->id)}}">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="{{URL::to('assets2/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{URL::to('assets2/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#pelanggaran').DataTable();
        } );
    </script>

    <script>
        $('#detail').sho(function() {
            $('#detailModal').Modal();
        } );
    </script>

@endpush

@push('head')
    <link href="{{URL::to('assets2/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endpush



