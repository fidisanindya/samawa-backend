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
                        <h3>Khitbah</h3>
                        <p class="text-subtitle text-muted">Data Khitbah</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Khitbah</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <section class="section">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex bd-highlight mb-3 align-items-center">
                        <div class="me-auto p-2 bd-highlight">Data Khitbah</div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Dari</th>
                                <th>Untuk</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px">
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->from }}</td>
                                    <td>{{ $item->to }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td class="d-flex">
                                        <a href="/khitbah/detail/{{ $item->id }}" class="fa-solid fa-eye p-2"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </section>
        </div>
    </div>
@endsection