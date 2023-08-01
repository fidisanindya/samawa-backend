@extends('layouts.main')
@section('container')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Ustadz</h3>
                    <p class="text-subtitle text-muted">Tambah Data Ustadz</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Ustadz</li>
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
                        <h4 class="card-title">Tambah Data Ustadz</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="/create-ustadz" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama-ustadz">Nama Lengkap</label>
                                                <input type="text" id="nama-ustadz" class="form-control" name="name" placeholder="Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="provinsi-ustadz">Provinsi</label>
                                                <input type="text" id="provinsi-ustadz" class="form-control" name="province" placeholder="Provinsi Domisili Saat Ini">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="kota-ustadz">Kota</label>
                                                <input type="text" id="kota-ustadz" class="form-control" name="city" placeholder="Kota Domisili Saat Ini">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="phone-ustadz">Nomor Handphone</label>
                                                <input type="number" id="phone-ustadz" class="form-control" name="phone" placeholder="Nomor Handphone yang Dapat Dihubungi">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-ustadz">Email</label>
                                                <input type="email" id="email-ustadz" class="form-control" name="email" placeholder="Email">
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