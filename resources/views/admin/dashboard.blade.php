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
                                    <li><a class="dropdown-item" href="#">Detail</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Edit</a>
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
@endsection

@push('js')
    <script src="{{URL::to('assets2/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{URL::to('assets2/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#pelanggaran').DataTable();
        } );
    </script>

@endpush

@push('head')
    <link href="{{URL::to('assets2/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endpush


