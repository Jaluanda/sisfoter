<?php

namespace App\Http\Controllers;

use App\Models\Sisfolog;
use Illuminate\Http\Request;

class SisfologController extends Controller
{
    public function index()
    {
        $dataBB = Sisfolog::where('kategori_logistik', 'bb')->paginate(5);
        $dataBTB = Sisfolog::where('kategori_logistik', 'btb')->paginate(5);
        return view('sisfolog.daftar-lengkap')
            ->with('dataBB', $dataBB)
            ->with('dataBTB', $dataBTB);
    }

    public function btb()
    {
        $dataBTB = Sisfolog::where('kategori_logistik', 'btb')->paginate(10);
        return view('sisfolog.daftar-btb')
            ->with('dataBTB', $dataBTB);
    }

    public function bb()
    {
        $dataBB = Sisfolog::where('kategori_logistik', 'bb')->paginate(10);
        return view('sisfolog.daftar-bb')
            ->with('dataBB', $dataBB);
    }

    public function create()
    {
        return view('sisfolog.tambah-logistik');
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
