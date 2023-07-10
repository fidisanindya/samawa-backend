@extends('layouts.main')
@section('container')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
            
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>User</h3>
                        <p class="text-subtitle text-muted">Data User</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <section class="section">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex bd-highlight mb-3 align-items-center">
                        <div class="me-auto p-2 bd-highlight">Data User</div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Provinsi</th>
                                <th>Kota</th>
                                <th>Nomor Telepon</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->bornday }}</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->province }}</td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <a href="/user/edit/{{ $item->id }}" class="fa-solid fa-pen p-2"></a>
                                        <a href="/user/delete/{{ $item->id }}" class="fa-solid fa-trash p-2"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </section>
        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2023 &copy; Samawa</p>
                </div>
                <div class="float-end">
                    <p>Created with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="https://saugi.me">Samawa</a></p>
                </div>
            </div>
        </footer>
    </div>
@endsection