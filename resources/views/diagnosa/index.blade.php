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
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Nama Pasien
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder="inputkan nama pasien" required>
                                                    <div class="invalid-feedback">
                                                        inputkan nama pasien
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom02">No. Rekam
                                                    Medik <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="number" class="form-control" id="validationCustom02"
                                                        placeholder="inputkan nomor rekam medik" required>
                                                    <div class="invalid-feedback">
                                                        inputkan nomor rekam medik
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom03">Tanggal
                                                    Lahir
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
                                                <label class="col-lg-4 col-form-label" for="validationCustom05">Jenis
                                                    Kelamin
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="default-select wide form-control"
                                                        id="validationCustom05">
                                                        <option value="html">Laki-Laki</option>
                                                        <option value="css">Perempuan</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Silahkan pilih salah satu
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom04">Alamat
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" id="validationCustom04" rows="5" placeholder="inputkan alamat" required></textarea>
                                                    <div class="invalid-feedback">
                                                        inputkan alamat
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom05">Ditujukan Ke
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="default-select wide form-control" id="single-select">
                                                        <option data-display="Select">Please select</option>
                                                        <option value="html">RSUD Bahteramas</option>
                                                        <option value="css">RS Bhayangkara</option>
                                                        <option value="javascript">RSUD Abunawas</option>
                                                        <option value="angular">RS Hermina Kendari</option>
                                                        <option value="angular">RS TK IV Dr.Ismoyo Kendari</option>
                                                        <option value="vuejs">RS Umum Dewi Sartika</option>
                                                        <option value="ruby">RS Santa Ana</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Silahkan pilih salah satu
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <input type="file" class="form-file-input">
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"><a href="javascript:void()">Terms
                                                        &amp; Conditions</a> <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="validationCustom12" required>
                                                        <label class="form-check-label" for="validationCustom12">
                                                            Agree to terms and conditions
                                                        </label>
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
