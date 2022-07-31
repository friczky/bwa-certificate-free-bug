@extends('layouts.app')

@section('title', 'Certificate Generate For Free Course')

@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="{{ route('home') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah List Sertifikat</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('tambah_list') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Sertifikat</label>
                        <input type="text" class="form-control" id="nama_sertifikat" name="nama_sertifikat"
                            placeholder="Nama Sertifikat">
                    </div>
                    <div class="form-group">
                        <label for="">Slug URL</label>
                        <input type="text" class="form-control" id="slug" name="slug"
                            placeholder="Nama Sertifikat">
                    </div>
                    <div class="form-group">
                        <label for="">Aksi</label><br>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>


        </div>
        <!-- /.container-fluid -->
    </div>


@endsection
