@extends('layouts.admin.master')
@section('konten')
    <h6 class="mb-0 text-uppercase">Daftar Pelanggaran</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="pelanggaran" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama Lengkapt</th>
                        <th>Keahlian</th>
                        <th width="10%" class="text-center">Aksi</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img class="img-responsive"  src="{{URL::to('assets/img/team3.jpg')}}" style="max-width: 100px; height: auto; border-radius: 100px;" alt=""></td>
                        <td></td>
                        <td></td>
                        <td><div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Primary</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{URL::to('/admin/detail')}}" >Detail</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>
                                    </li>
                                    <li><a class="dropdown-item" onclick="return confirm('yakin mau hapus ?')" href="">Delete</a>
                                    </li>
                                </ul>
                            </div></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
 <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
                        <form action="" method="" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-2 mt-2 mb-2">
                                    <label class="form-label mt-2 mb-2">Nama Lengkap</label>
                                </div>
                                <div class="col-lg-10 mt-2 mb-2">
                                    <input type="text" class="form-control radius-15" name="name" required placeholder="name">
                                </div>

                                <div class="col-lg-2 mt-2 mb-2">
                                    <label class="form-label mt-2 mb-2">Keahlian</label>
                                </div>
                                <div class="col-lg-10 mt-2 mb-2">
                                    <input type="text" class="form-control radius-15" name="name" required placeholder="name">
                                </div>

                                <div class="col-lg-2 mt-2 mb-2">
                                    <label class="form-label mt-2 mb-2">Keahlian</label>
                                </div>
                                <div class="col-lg-10 mt-2 mb-2">
                                    <input type="file" class="form-control radius-15" accept="image/*" name="name" required
                                           placeholder="name">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
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
        $(document).ready(function() {
            $('#pelanggaran').Modal();
        } );
    </script>

@endpush

@push('head')
    <link href="{{URL::to('assets2/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endpush


