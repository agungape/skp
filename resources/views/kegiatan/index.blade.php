@extends('layouts.master')
@section('title', 'Mitra')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Kegiatan Harian</h4>
                            <a href="{{route('kegiatan.create')}}" type="button" class="btn btn-rounded btn-info">
                                <span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i></span>
                                Tambah Data
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table header-border table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal Kegiatan</th>
                                            <th>Jam Kerja Efektif</th>
                                            <th>Jumlah Kegiatan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
