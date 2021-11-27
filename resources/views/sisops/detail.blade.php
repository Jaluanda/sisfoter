@extends('backend.layouts.admin-master')

@section('title')
    Informasi Operasi Militer - #KETUPAT21
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Informasi Operasi Militer - #KETUPAT21</h1>
            <div class="section-header-breadcrumb">

            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="buttons">
                                <a href="{{ route('sisfolog.list')}}" class="btn btn-warning"><i class="fas fa-industry"></i> Daftar Logistik</a>
                                <a href="{{ route('sisfopers.list') }}" class="btn btn-success"><i class="fa fa-users"></i> Daftar Personel</a>
                                <a href="{{ route('sisops.list') }}" class="btn btn-danger"><i class="fa fa-rocket"></i> Daftar Operasi</a>
                                <a href="#" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="section-title">Informasi Singkat</h2>
            <p class="section-lead">Data yang ditampilkan berikut ini adalah informasi singkat mengenai operasi militer yang sedang berjalan.</p>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Commander on Duty</h4>
                        </div>
                        <div class="card-body pb-0">
                            <div class="form-group">
                                <div class="input-group">
                                        <img alt="image" class="mr-3" width="200" src="https://www.random-name-generator.com/images/faces/male-asia/24.jpg">
                                        <img alt="image" class="mr-3" width="200" src="https://www.random-name-generator.com/images/faces/male-white/08.jpg">
                                        <img alt="image" class="mr-3" width="200" src="https://www.random-name-generator.com/images/faces/male-asia/13.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Deskripsi Operasi</h4>
                        </div>
                        <div class="card-body pb-0">
{{--                            <p class="text-muted">Berikut adalah data kontak customer pada tiket ini.</p>--}}
                            <div class="form-group">
                                <label>Penanggung jawab</label>
                                <div class="input-group">
                                        Among Rajata (Commander)
                                        <br>Damar Kuswoyo
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Target Operasi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        Pengamanan jelang libur Idul Fitri tahun 2021 dan Mudik Lebaran:
                                        <br>1. Lorem ipsum dolor sit amet
                                        <br>2. Consectetur adipiscing elit
                                        <br>3. Vestibulum imperdiet dolor metus, nec sodales purus consequat ut
                                        <br>4. Sed convallis, arcu et faucibus pharetra, lorem risus venenatis quam, vel vestibulum urna ante ac mauris.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-sm-5 mt-md-0">
                        <div class="card-header">
                            <h4>Peta Lokasi</h4>
                        </div>
                        <div class="card-body p-0">
                            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 400px; width: 100%; margin: 0 auto;">
                                <iframe class="w-100" src="https://maps.google.com/maps?q=yogyakarta&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        style="height: 400px; border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-body">

                <h2 class="section-title">Personel Yang Ditugaskan</h2>
                <p class="section-lead">Daftar personel berikut merupakan personel yang ditugaskan untuk operasi militer ini.</p>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Personel</h4>
                                <div class="card-header-action">
                                    <div class="input-group">
                                        <a href="{{ route('sisfopers.create') }}" class="btn btn-primary">Tambahkan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive table-invoice">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>No.</th>
                                            <th>No. Personel</th>
                                            <th>Nama</th>
                                            <th>Foto</th>
                                            <th>Pangkat/Gol.</th>
                                            <th>Corps/Kecabangan</th>
                                            <th>Kotama</th>
                                            <th>Jabatan/TMT</th>
                                            <th>Opsi</th>
                                        </tr>
                                        @forelse($dataPers as $key => $value)
                                            <tr>
                                                <td class="font-weight-600">{{ $loop->iteration }}</td>
                                                <td class="font-weight-600">{{ $value->nopers }}</td>
                                                <td class="font-weight-600">{{ $value->nama }}
                                                    @if($value->jenis_kelamin === 'laki')
                                                        <i class="fa fa-mars"></i>
                                                    @else
                                                        <i class="fa fa-venus"></i>
                                                    @endif
                                                </td>
                                                <td class="font-weight-600">
                                                    <img alt="image" class="mr-3" width="50" src="{{ $value->foto }}">
                                                </td>
                                                <td class="font-weight-600">{{ $value->pangkat }}</td>
                                                <td class="font-weight-600">{{ $value->corps }}</td>
                                                <td class="font-weight-600">{{ $value->kotama }}</td>
                                                <td class="font-weight-600">{{ $value->jabatan }}</td>
                                                <td class="font-weight-600">
                                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="font-weight-600">Tidak ada data</td>
                                            </tr>
                                        @endforelse
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="section-title">Logistik Yang Digunakan</h2>
            <p class="section-lead">Daftar logistik berikut merupakan logistik yang digunakan untuk operasi militer ini.</p>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar Personel</h4>
                            <div class="card-header-action">
                                <div class="input-group">
                                    <a href="{{ route('sisfolog.create') }}" class="btn btn-primary">Tambahkan</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive table-invoice">
                                <table class="table table-striped">
                                    <tr>
                                        <th>No.</th>
                                        <th>No. Inventaris</th>
                                        <th>Kategori</th>
                                        <th>Nama Materiil</th>
                                        <th>Lokasi</th>
                                        <th>Kondisi</th>
                                        <th>Opsi</th>
                                    </tr>
                                    @forelse($dataLog as $key => $value)
                                        <tr>
                                            <td class="font-weight-600">{{ $loop->iteration }}</td>
                                            <td class="font-weight-600" style="width: 200px">{{ $value->inventaris }}</td>
                                            <td class="font-weight-600">{{ $value->kategori }}</td>
                                            <td class="font-weight-600">{{ $value->nama_materiil }}</td>
                                            <td class="font-weight-600">{{ $value->lokasi }}</td>
                                            <td class="font-weight-600">
                                                @if($value->kondisi === 'Baik')
                                                    <span class="badge badge-success">Baik</span>
                                                @elseif($value->kondisi === 'Kurang Baik')
                                                    <span class="badge badge-warning">Kurang Baik</span>
                                                @else
                                                    <span class="badge badge-danger">Rusak</span>
                                                @endif
                                            </td>
                                            <td class="font-weight-600" style="width: 150px">
                                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="font-weight-600">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
