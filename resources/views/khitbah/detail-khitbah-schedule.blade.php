@extends('layouts.main')
@section('container')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Khitbah</h3>
                    <p class="text-subtitle text-muted">Detail Khitbah</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Khitbah</li>
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
                    <div class="card-content">
                        <div class="card-body">
                            <table class="table" id="table1">
                                <tr>
                                    <th>ID Khitbah</th>
                                    <th>:</th>
                                    <td>{{ $data->from }}</td>
                                </tr>
                                <tr>
                                    <th>ID Ustadz</th>
                                    <th>:</th>
                                    <td>{{ $data->ustadz_id }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ustadz</th>
                                    <th>:</th>
                                    <td>{{ $data->guardian_name}}</td>
                                </tr>
                                <tr>
                                    <th>Nomor Telepon Ustadz</th>
                                    <th>:</th>
                                    <td>{{ $data->guardian_phone }}</td>
                                </tr>
                                <tr>
                                    <th>Catatan</th>
                                    <th>:</th>
                                    <td>{{ $data->notes }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Khitbah</th>
                                    <th>:</th>
                                    <td>{{ $data->date }}</td>
                                </tr>
                                <tr>
                                    <th>Waktu Khitbah</th>
                                    <th>:</th>
                                    <td>{{ $data->time }}</td>
                                </tr>
                            </table>
                            <div class="d-flex justify-content-end">
                                <button onclick="location.href='{{ url('/khitbah') }}'" class="btn btn-primary" type="button">Kembali</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection