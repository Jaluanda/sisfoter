@extends('backend.layouts.admin-master')

@section('title')
    Tambah Logistik
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Logistik</h1>
            <div class="section-header-breadcrumb">

            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Isian</h4>
                        </div>
                        <div class="card-body">
                            <form method="GET" action="#">
                                @csrf
{{--                                <div class="form-group row mb-4">--}}
{{--                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Personel</label>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <input name="test" type="text" class="form-control" value="Asmianto Mangunsong">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row mb-4">--}}
{{--                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <img alt="image" class="mr-3" width="50" src="https://www.random-name-generator.com/images/faces/male-asia/29.jpg">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row mb-4">--}}
{{--                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Personel</label>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <input name="test" type="text" class="form-control" value="12154">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row mb-4">--}}
{{--                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <input name="test" type="text" class="form-control" value="365214120419540007">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row mb-4">--}}
{{--                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">TTL</label>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <input name="test" type="text" class="form-control" value="Semarang">--}}
{{--                                        <input name="date" type="date" class="form-control" value="1954-05-12">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row mb-4">--}}
{{--                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <select name="jk" id="jk" class="form-control">--}}
{{--                                            <option value="volvo">Laki-laki</option>--}}
{{--                                            <option value="saab">Perempuan</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row mb-4">--}}
{{--                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <textarea name="reply" type="text" class="form-control" required autocomplete="off" style="height: 50px;">Dk. Babadan No. 384, Jambi 68492, KalSel</textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row mb-4">--}}
{{--                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pangkat/Gol.</label>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <input name="test" type="text" class="form-control" value="Prajurit Kepala">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row mb-4">--}}
{{--                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Corps/Kecabangan</label>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <input name="test" type="text" class="form-control" value="CPN">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row mb-4">--}}
{{--                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kotama</label>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <input name="test" type="text" class="form-control" value="Pangkostrad">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row mb-4">--}}
{{--                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan/TMT</label>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <input name="test" type="text" class="form-control" value="Tamudi 1 Situud">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <a href="{{ route('sisfolog.list') }}" class="btn btn-outline-info"><i class="fas fa-backward"></i> Kembali ke Daftar</a>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambahkan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
