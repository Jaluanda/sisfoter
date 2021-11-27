@extends('backend.layouts.admin-master')

@section('title')
    Riwayat Operasi
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Operasi Militer</h1>
        </div>

        <div class="section-body">

            <h2 class="section-title">Sedang Berlangsung</h2>
            <p class="section-lead">Daftar operasi berikut merupakan daftar operasi yang sedang berjalan.</p>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar Operasi</h4>
                            <div class="card-header-action">
                                <div class="input-group">
                                    <a href="{{ route('sisops.create') }}" class="btn btn-primary">Tambahkan</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive table-invoice">
                                <table class="table table-striped">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Operasi</th>
                                        <th>Commander</th>
                                        <th>Lokasi</th>
                                        <th>Personel</th>
                                        <th>Logistik</th>
                                        <th>Mulai Ops</th>
                                        <th>Akhir Ops</th>
                                        <th>Opsi</th>
                                    </tr>
                                        <tr>
                                            <td class="font-weight-600">1</td>
                                            <td class="font-weight-600">KETUPAT21</td>
                                            <td class="font-weight-600">Luluh Dongoran</td>
                                            <td class="font-weight-600">Maluku</td>
                                            <td class="font-weight-600">35 personel</td>
                                            <td class="font-weight-600">150 item</td>
                                            <td class="font-weight-600">
                                                <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                            </td>
                                            <td class="font-weight-600">
                                                <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                            </td>
                                            <td class="font-weight-600" style="width: 150px">
                                                <a href="{{ route('sisops.show') }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <tr>
                                        <td class="font-weight-600">2</td>
                                        <td class="font-weight-600">KETUPAT21</td>
                                        <td class="font-weight-600">Luluh Dongoran</td>
                                        <td class="font-weight-600">Maluku</td>
                                        <td class="font-weight-600">35 personel</td>
                                        <td class="font-weight-600">150 item</td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-info">Belum diatur</span>
                                        </td>
                                        <td class="font-weight-600" style="width: 200px">
                                            <a href="{{ route('sisops.show') }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-600">3</td>
                                        <td class="font-weight-600">KETUPAT21</td>
                                        <td class="font-weight-600">Luluh Dongoran</td>
                                        <td class="font-weight-600">Maluku</td>
                                        <td class="font-weight-600">35 personel</td>
                                        <td class="font-weight-600">150 item</td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-info">Belum diatur</span>
                                        </td>
                                        <td class="font-weight-600" style="width: 150px">
                                            <a href="{{ route('sisops.show') }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-600">4</td>
                                        <td class="font-weight-600">KETUPAT21</td>
                                        <td class="font-weight-600">Luluh Dongoran</td>
                                        <td class="font-weight-600">Maluku</td>
                                        <td class="font-weight-600">35 personel</td>
                                        <td class="font-weight-600">150 item</td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600" style="width: 150px">
                                            <a href="{{ route('sisops.show') }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-600">5</td>
                                        <td class="font-weight-600">KETUPAT21</td>
                                        <td class="font-weight-600">Luluh Dongoran</td>
                                        <td class="font-weight-600">Maluku</td>
                                        <td class="font-weight-600">35 personel</td>
                                        <td class="font-weight-600">150 item</td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600" style="width: 150px">
                                            <a href="{{ route('sisops.show') }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-600">6</td>
                                        <td class="font-weight-600">KETUPAT21</td>
                                        <td class="font-weight-600">Luluh Dongoran</td>
                                        <td class="font-weight-600">Maluku</td>
                                        <td class="font-weight-600">35 personel</td>
                                        <td class="font-weight-600">150 item</td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600" style="width: 150px">
                                            <a href="{{ route('sisops.show') }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="section-title">Telah Berakhir</h2>
            <p class="section-lead">Daftar operasi berikut merupakan daftar operasi yang telah berakhir atau batal dilaksanakan.</p>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar Personel</h4>
                            <div class="card-header-action">
                                <div class="input-group">

                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive table-invoice">
                                <table class="table table-striped">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Operasi</th>
                                        <th>Commander</th>
                                        <th>Lokasi</th>
                                        <th>Personel</th>
                                        <th>Logistik</th>
                                        <th>Mulai Ops</th>
                                        <th>Akhir Ops</th>
                                        <th>Opsi</th>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-600">1</td>
                                        <td class="font-weight-600">KETUPAT21</td>
                                        <td class="font-weight-600">Luluh Dongoran</td>
                                        <td class="font-weight-600">Maluku</td>
                                        <td class="font-weight-600">35 personel</td>
                                        <td class="font-weight-600">150 item</td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-secondary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600" style="width: 150px">
                                            <a href="{{ route('sisops.show') }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-600">2</td>
                                        <td class="font-weight-600">KETUPAT21</td>
                                        <td class="font-weight-600">Luluh Dongoran</td>
                                        <td class="font-weight-600">Maluku</td>
                                        <td class="font-weight-600">35 personel</td>
                                        <td class="font-weight-600">150 item</td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-secondary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600" style="width: 200px">
                                            <a href="{{ route('sisops.show') }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-600">3</td>
                                        <td class="font-weight-600">KETUPAT21</td>
                                        <td class="font-weight-600">Luluh Dongoran</td>
                                        <td class="font-weight-600">Maluku</td>
                                        <td class="font-weight-600">35 personel</td>
                                        <td class="font-weight-600">150 item</td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-primary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600">
                                            <span class="badge badge-secondary">{{ \Carbon\Carbon::now()->subDays(random_int(12, 1651)) }}</span>
                                        </td>
                                        <td class="font-weight-600" style="width: 150px">
                                            <a href="{{ route('sisops.show') }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
