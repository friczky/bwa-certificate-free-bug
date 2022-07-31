@extends('layouts.app')

@section('title', 'Certificate Generate For Free Course')

@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="{{ route('tambah') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Sertifikat</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Link</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->nama_sertifikat }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>
                                <a href="https://class.buildwithangga.com/certificate/{{ $item->slug }}"
                                    class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-download"></i></a>
                                <a href="{{ route('tambah') }}/{{ $item->id }}" class="btn btn-danger btn-sm"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->


@endsection
