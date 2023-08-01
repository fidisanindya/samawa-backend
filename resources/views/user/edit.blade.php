@extends('layouts.main')
@section('container')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit User</h3>
                    <p class="text-subtitle text-muted">Edit Data User</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data User</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="/user/update/{{ $data->id }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama-user">Nama Lengkap</label>
                                                <input type="text" id="nama-user" class="form-control" name="name" placeholder="Nama Lengkap" value="{{ $data->name }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="tanggal-lahir-user">Tanggal Lahir</label>
                                                <input type="date" id="tanggal-lahir-user" class="form-control" name="bornday" placeholder="Tanggal Lahir" value="{{ $data->bornday }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="jenis-kelamin-user">Jenis Kelamin</label>
                                                <input type="text" id="jenis-kelamin-user" class="form-control" name="gender" placeholder="Jenis Kelamin" value="{{ $data->gender }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="provinsi-user">Provinsi</label>
                                                <input type="text" id="provinsi-user" class="form-control" name="province" placeholder="Provinsi Domisili Saat Ini" value="{{ $data->province }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="kota-user">Kota</label>
                                                <input type="text" id="kota-user" class="form-control" name="city" placeholder="Kota Domisili Saat Ini" value="{{ $data->city }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="phone-user">Nomor Handphone</label>
                                                <input type="number" id="phone-user" class="form-control" name="phone" placeholder="Nomor Handphone yang Dapat Dihubungi" value="{{ $data->phone }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-user">Email</label>
                                                <input type="email" id="email-user" class="form-control" name="email" placeholder="Email" value="{{ $data->email }}">
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection