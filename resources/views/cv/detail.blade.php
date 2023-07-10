@extends('layouts.main')
@section('container')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail CV</h3>
                    <p class="text-subtitle text-muted">Detail CV</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail CV</li>
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
                                    <th>Nama</th>
                                    <th>:</th>
                                    <td>{{ $data->user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <th>:</th>
                                    <td>{{ $data->description }}</td>
                                </tr>
                                <tr>
                                    <th>Esai</th>
                                    <th>:</th>
                                    <td>{{ $data->essay }}</td>
                                </tr>
                                <tr>
                                    <th>Pendidikan Terakhir</th>
                                    <th>:</th>
                                    <td>{{ $data->education }}</td>
                                </tr>
                                <tr>
                                    <th>Perkerjaan</th>
                                    <th>:</th>
                                    <td>{{ $data->career }}</td>
                                </tr>
                                <tr>
                                    <th>Hobi</th>
                                    <th>:</th>
                                    <td>{{ $data->hobby }}</td>
                                </tr>
                                <tr>
                                    <th>Visi</th>
                                    <th>:</th>
                                    <td>{{ $data->vission }}</td>
                                </tr>
                                <tr>
                                    <th>Misi</th>
                                    <th>:</th>
                                    <td>{{ $data->mission }}</td>
                                </tr>
                                <tr>
                                    <th>Status Pernikahan</th>
                                    <th>:</th>
                                    <td>{{ $data->marital_status }}</td>
                                </tr>
                                <tr>
                                    <th>Kesiapan Menikah</th>
                                    <th>:</th>
                                    <td>{{ $data->marriage_prep }}</td>
                                </tr>
                                <tr>
                                    <th>Target Menikah</th>
                                    <th>:</th>
                                    <td>{{ $data->marriage_target }}</td>
                                </tr>
                                <tr>
                                    <th>Info Keluarga</th>
                                    <th>:</th>
                                    <td>{{ $data->family_info }}</td>
                                </tr>
                                <tr>
                                    <th>Status Keagamaan</th>
                                    <th>:</th>
                                    <td>{{ $data->religion_status }}</td>
                                </tr>
                                <tr>
                                    <th>Mahdzab</th>
                                    <th>:</th>
                                    <td>{{ $data->mahdzab }}</td>
                                </tr>
                            </table>
                            <button onclick="location.href='{{ url('/cv') }}'" class="btn btn-primary" type="button">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection