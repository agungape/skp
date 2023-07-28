@extends('layouts.master')
@section('title', 'Upload Hasil Lab')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Hasil Lab</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Upload</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Unit Kerja
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder="inputkan nama pasien" required>
                                                    <div class="invalid-feedback">
                                                        Unit Kerja
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom02">Jabatan <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="default-select wide form-control"
                                                        id="validationCustom05">
                                                        <option value="html">{{}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom05">PK/BK
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="default-select wide form-control"
                                                        id="validationCustom05">
                                                        <option value="html">I</option>
                                                        <option value="css">II</option>
                                                        <option value="css">III</option>
                                                        <option value="css">IV</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Silahkan pilih salah satu
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom03">Tanggal
                                                Kegiatan Harian
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" id="validationCustom03"
                                                        placeholder="inputkan tanggal lahir" required>
                                                    <div class="invalid-feedback">
                                                        inputkan tanggal lahir
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-lg-8 ms-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
