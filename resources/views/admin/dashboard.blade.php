@extends('layouts.admin.master')
@section('konten')
    <h6 class="mb-0 text-uppercase">Daftar Team</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="pelanggaran" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Foto</th>
                        <th>Nama Lengkapt</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Keahlian</th>
                        <th width="10%" class="text-center">Aksi</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($team as $data)
                    <tr>
                        <td>{{$no ++}}</td>
                        <td><img class="img-responsive"  src="{{URL::to('images/team/'. $data->image)}}" style="max-width: 100px; height: auto; border-radius: 100px;" alt=""></td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->addres}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->keahlian}}</td>
                        <td><div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Option</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{url('/admin/team/detail/'. $data->id)}}" >Detail</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{url('admin/team/edit/'. $data->id)}}">Edit</a>
                                    </li>
                                    <li><a class="dropdown-item" onclick="return confirm('yakin mau hapus ?')" href="{{url('admin/team/delete/'. $data->id)}}">Delete</a>
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
