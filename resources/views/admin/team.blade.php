@extends('layouts.admin.master')
@section('konten')
    <style>
        label {
            font-size: 16px;
        }
    </style>
    <div class="card border-0  border-3 border-end border-bottom radius-15">
        <div class="card-header">
            <h4><i class="bx bx-plus-circle pt-1"></i> Tambah</h4>
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
            </form>


            <button class="btn btn-primary btn-sm radius-10 mt-4  float-end pe-3"><i class="bx bx-save pb-1 ps-3"></i>
                Simpan
            </button>


        </div>
    </div>
@endsection
@push('head')

@endpush

