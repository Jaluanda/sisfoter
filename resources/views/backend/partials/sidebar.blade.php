<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('welcome') }}">COMMANDER DASHBOARD</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="https://www.random-name-generator.com/images/faces/male-asia/24.jpg" alt="">
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Pintasan</li>
            <li class="active">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
{{--                <a class="nav-link" href="{{ route('dashboard') }}" style="color: #4B5320"><i class="fas fa-fire"></i><span>Dashboard</span></a>--}}
            </li>
            <li class="menu-header">SISOPS</li>
            <li class="dropdown">
                <a href="#" class="nav-link"><i class="fas fa-binoculars"></i> <span>Pencarian Cepat</span></a>
                <a href="#" class="nav-link"><i class="fas fa-rocket"></i> <span>Mulai Operasi</span></a>
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-map"></i> <span>Data Operasi</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{ route('sisops.ongoing') }}">Sedang Berlangsung</a></li>
                    <li class=""><a class="nav-link" href="{{ route('sisops.past') }}">Telah Berakhir</a></li>
                    <li class=""><a class="nav-link" href="{{ route('sisops.list') }}">Riwayat</a></li>
                    <li class=""><a class="nav-link" href="#">Cetak Rekap</a></li>
                </ul>
            </li>
            <li class="menu-header">SISFOPERS</li>
            <li class="dropdown">
                <a href="#" class="nav-link"><i class="fas fa-search"></i> <span>Pencarian Cepat</span></a>
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Data Personel</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{ route('sisfopers.create') }}">Tambah Baru</a></li>
                    <li class=""><a class="nav-link" href="{{ route('sisfopers.list') }}">Daftar Lengkap</a></li>
                    <li class=""><a class="nav-link" href="{{ route('sisfopers.tugas') }}">Sedang Bertugas</a></li>
                    <li class=""><a class="nav-link" href="{{ route('sisfopers.aktif') }}">Siap Bertugas</a></li>
                    <li class=""><a class="nav-link" href="{{ route('sisfopers.pensiun') }}">Purna Tugas</a></li>
                </ul>
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tasks"></i> <span>Kriteria Personel</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="#">Atur Kategori</a></li>
                    <li class=""><a class="nav-link" href="#">Daftar Berdasar Kriteria</a></li>
                </ul>
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-print"></i> <span>Rekap</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="#">Cetak Personel</a></li>
                    <li class=""><a class="nav-link" href="#">Peta Jabatan</a></li>
                </ul>
            </li>
            <li class="menu-header">SISFOLOG</li>
            <li class="dropdown">
                <a href="#" class="nav-link"><i class="fas fa-assistive-listening-systems"></i> <span>Pencarian Cepat</span></a>
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-people-carry"></i> <span>Data Logistik</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{ route('sisfolog.create') }}">Tambah Baru</a></li>
                    <li class=""><a class="nav-link" href="{{ route('sisfolog.list') }}">Daftar Lengkap</a></li>
                    <li class=""><a class="nav-link" href="{{ route('sisfolog.btb') }}">Kategori BTB</a></li>
                    <li class=""><a class="nav-link" href="{{ route('sisfolog.bb') }}">Kategori BB</a></li>
                </ul>
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-shopping-cart"></i> <span>Rekap</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="#">Cetak Logistik</a></li>
                    <li class=""><a class="nav-link" href="#">Laporan Persediaan</a></li>
                </ul>
            </li>
            <li class="menu-header">Pengaturan</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cogs"></i> <span>Manajemen Pengguna</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="#">Daftar Pengguna</a></li>
                    <li class=""><a class="nav-link" href="#">Hak Akses</a></li>
                </ul>
            </li>
            <li class="active">
                <a class="nav-link" href="#"><i class="fas fa-book"></i><span>Panduan Penggunaan</span></a>
            </li>
            <li class="active">
                <a class="nav-link" href="#"><i class="fas fa-exclamation"></i><span>Informasi Sistem</span></a>
            </li>
        </ul>
    </aside>
</div>
