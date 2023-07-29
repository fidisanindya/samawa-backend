@extends('layouts.main')
@section('container')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail User</h3>
                    <p class="text-subtitle text-muted">Detail User</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail User</li>
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
                                <img class="card-img-top img-fluid" src="{{asset('assets/images/users/ali-assegaf.jpg')}}" alt="Card image cap" style="width: 200px; height: 237px; object-fit: cover;" />
                                <tr>
                                    <th>ID User</th>
                                    <th>:</th>
                                    <td>{{ $data->user_id }}</td>
                                </tr>
                                <tr>
                                    <th>KTP</th>
                                    <th>:</th>
                                    <td>{{ $data->ktp }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <th>:</th>
                                    <td>{{ $data->bornplace }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <th>:</th>
                                    <td>{{ $data->bornday }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <th>:</th>
                                    <td>{{ $data->gender }}</td>
                                </tr>
                                <tr>
                                    <th>Status Perkawinan</th>
                                    <th>:</th>
                                    <td>{{ $data->marital_status }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <th>:</th>
                                    <td>{{ $data->address }}</td>
                                </tr>
                                <tr>
                                    <th>RT</th>
                                    <th>:</th>
                                    <td>{{ $data->rt }}</td>
                                </tr>
                                <tr>
                                    <th>RW</th>
                                    <th>:</th>
                                    <td>{{ $data->rw }}</td>
                                </tr>
                                <tr>
                                    <th>Provinsi</th>
                                    <th>:</th>
                                    <td>{{ $data->province }}</td>
                                </tr>
                                <tr>
                                    <th>Kota</th>
                                    <th>:</th>
                                    <td>{{ $data->city }}</td>
                                </tr>
                                <tr>
                                    <th>Kecamatan</th>
                                    <th>:</th>
                                    <td>{{ $data->subdistrict }}</td>
                                </tr>
                                <tr>
                                    <th>Kelurahan</th>
                                    <th>:</th>
                                    <td>{{ $data->urban_village }}</td>
                                </tr>
                                <tr>
                                    <th>Kode Pos</th>
                                    <th>:</th>
                                    <td>{{ $data->postal_code }}</td>
                                </tr>
                            </table>
                            <button onclick="location.href='{{ url('/varification') }}'" class="btn btn-primary" type="button">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection