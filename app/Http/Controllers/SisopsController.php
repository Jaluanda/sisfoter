<?php

namespace App\Http\Controllers;

use App\Models\Sisfolog;
use App\Models\Sisfopers;
use Illuminate\Http\Request;

class SisopsController extends Controller
{
    public function index()
    {
        return view('sisops.daftar-lengkap');
    }

    public function ongoing()
    {
        return view('sisops.daftar-ongoing');
    }

    public function past()
    {
        return view('sisops.daftar-past');
    }

    public function create()
    {
        return view('sisops.tambah-operasi');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        $dataPers = Sisfopers::all()->random(random_int(7,17));
        $dataLog = Sisfolog::all()->random(random_int(6,25));
        return view('sisops.detail')
            ->with('dataPers', $dataPers)
            ->with('dataLog', $dataLog);
    }

    public function pickLog()
    {
        return view('sisops.pick-logistik');
    }

    public function pickPers()
    {
        return view('sisops.pick-personel');
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
