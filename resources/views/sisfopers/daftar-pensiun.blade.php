@extends('backend.layouts.admin-master')

@section('title')
    Daftar Personel Purna Tugas
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Personel Purna Tugas</h1>
        </div>

        <div class="section-body">

            <h2 class="section-title">Telah Purna Tugas</h2>
            <p class="section-lead">Daftar personel berikut merupakan personel yang telah memasuki pensiun atau dinonaktifkan.</p>

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
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                    @forelse($dataPensiun as $key => $value)
                                        <tr>
                                            <td class="font-weight-600">{{ (($dataPensiun->currentPage() * 10) - 10) + $loop->iteration }}</td>
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
                                                @if($value->status === 'pensiun')
                                                    <span class="badge badge-warning">Pensiun</span>
                                                @else
                                                    <span class="badge badge-danger">Nonaktif</span>
                                                @endif
                                            </td>
                                            <td class="font-weight-600">
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
                        {{ $dataPensiun->links() }}
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
