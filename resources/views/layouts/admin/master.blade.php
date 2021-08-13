<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.head')
@include('layouts.admin.sidebar')
@include('layouts.admin.header')

<div class="page-wrapper">
    <div class="page-content">
        @yield('konten')
    </div>
</div>


@include('layouts.admin.js')
