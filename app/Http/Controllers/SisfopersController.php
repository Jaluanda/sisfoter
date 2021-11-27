<?php

namespace App\Http\Controllers;

use App\Models\Sisfopers;
use Illuminate\Http\Request;

class SisfopersController extends Controller
{
    public function index()
    {
        $dataTugas = Sisfopers::where('status', 'ops')->orWhere('status', 'dinas')->paginate(5);
        $dataPensiun = Sisfopers::where('status', 'pensiun')->orWhere('status', 'nonaktif')->paginate(5);
        $dataAktif = Sisfopers::where('status', 'aktif')->paginate(5);
        return view('sisfopers.daftar-lengkap')
            ->with('dataTugas', $dataTugas)
            ->with('dataPensiun', $dataPensiun)
            ->with('dataAktif', $dataAktif);
    }

    public function tugas()
    {
        $dataTugas = Sisfopers::where('status', 'ops')->orWhere('status', 'dinas')->paginate(10);
        return view('sisfopers.daftar-tugas')
            ->with('dataTugas', $dataTugas);
    }

    public function aktif()
    {
        $dataAktif = Sisfopers::where('status', 'aktif')->paginate(10);
        return view('sisfopers.daftar-aktif')
            ->with('dataAktif', $dataAktif);
    }

    public function pensiun()
    {
        $dataPensiun = Sisfopers::where('status', 'pensiun')->orWhere('status', 'nonaktif')->paginate(10);
        return view('sisfopers.daftar-pensiun')
            ->with('dataPensiun', $dataPensiun);
    }

    public function create()
    {
        return view('sisfopers.tambah-personel');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
