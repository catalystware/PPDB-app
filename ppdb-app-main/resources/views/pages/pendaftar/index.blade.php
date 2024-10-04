@extends('layouts.main')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Data Pendaftar</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Pendaftar</a></li>
                <li class="breadcrumb-item active">Data Pendaftar</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    Berikut data pendaftar yang sudah mengisi form pendaftaran
                    .
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rahmat Ahmad</td>
                                <td>Laki-laki</td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#"><i class="fas fa-info-circle"></i></button>
                                    <form action="#" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pamungkas Anggit Trismala</td>
                                <td>Laki-laki</td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#"><i class="fas fa-info-circle"></i></button>
                                    <form action="#" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footer')
</div>
@endsection
