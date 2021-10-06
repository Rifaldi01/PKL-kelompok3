@extends('layouts.admin.master')
@section('konten')
    <style>
        label {
            font-size: 16px;
        }
    </style>
    <div class="card border-0  border-3 border-end border-bottom radius-15">
        <div class="card-header">
            <h4><i class="bx bx-plus-circle pt-1"></i> @if(isset($data->id)) Edit @else Tambah @endif Team</h4>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-2 mt-2 mb-2">
                        <label class="form-label mt-2 mb-2">Nama Lengkap</label>
                    </div>
                    <div class="col-lg-10 mt-2 mb-2">
                        <input type="text" class="form-control radius-15" name="name" value="@if(isset($data->name)) {{$data->name}} @endif" required placeholder="name">
                    </div>

                    <div class="col-lg-2 mt-2 mb-2">
                        <label class="form-label mt-2 mb-2">Status</label>
                    </div>
                    <div class="col-lg-10 mt-2 mb-2">
{{--                        <input type="text" class="form-control radius-15" name="status" value="@if(isset($data->status)) {{$data->status}} @endif" required placeholder="status">--}}
                        <select name="status" id="" value="" class="form-control radius-15">
                            <option value="">
                                         Pilih...
                            </option>
                            <option value="Kaprodi" @if(isset($data->status)) @if ($data->status == 'Kaprodi') selected @endif @endif >Kaprodi</option>
                            <option value="Guru" @if(isset($data->status)) @if ($data->status == 'Guru') selected @endif @endif>Guru</option>
                        </select>
                    </div>

                    <div class="col-lg-2 mt-2 mb-2">
                        <label class="form-label mt-2 mb-2">Keahlian</label>
                    </div>
                    <div class="col-lg-10 mt-2 mb-2">
                        <input type="text" class="form-control radius-15" value="@if(isset($data->keahlian)) {{$data->keahlian}} @endif" name="keahlian" required placeholder="keahlian">
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

                        <input type="file" class="form-control radius-15" accept="image/*" name="image" {{$required}}
                               placeholder="image">
                    </div>

                    <div class="col-lg-2 mt-2 mb-2">
                        <label class="form-label mt-2 mb-2">Alamat</label>
                    </div>
                    <div class="col-lg-10 mt-2 mb-2">
                        <input type="text" class="form-control radius-15" name="addres" value="@if(isset($data->addres)) {{$data->addres}} @endif"  required placeholder="Alamat">
                    </div>

                </div>
            <button class="btn btn-primary btn-sm radius-10 mt-4  float-end pe-3"><i class="bx bx-save pb-1 ps-3"></i>
                Simpan
            </button>
            </form>




        </div>
    </div>
@endsection
@push('head')

@endpush

