@extends('backend.layouts.admin-master')

@section('title')
    Daftar Logistik Barang Bergerak
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Logistik Barang Bergerak</h1>
        </div>

        <div class="section-body">

            <h2 class="section-title">Barang Bergerak (BB)</h2>
            <p class="section-lead">Daftar logistik berikut merupakan daftar logistik dengan kategori BB yang meliputi peralatan, mesin-mesin, kendaraan bermotor, alat elektronik, inventaris kantor, dsb. yang nilainya signifikan dan masa manfaatnya 12 bulan lebih.</p>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar Logistik</h4>
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
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                    @forelse($dataBB as $key => $value)
                                        <tr>
                                            <td class="font-weight-600">{{ (($dataBB->currentPage() * 10) - 10) + $loop->iteration }}</td>
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
                                            <td class="font-weight-600">
                                                @if($value->status === 'Tersedia')
                                                    <span class="badge badge-success">Tersedia</span>
                                                @elseif($value->status === 'Terpakai')
                                                    <span class="badge badge-danger">Terpakai</span>
                                                @else
                                                    <span class="badge badge-secondary">Tidak Diketahui</span>
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
                        {{ $dataBB->links() }}
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
