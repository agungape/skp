<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unitkerja;

class KegiatanController extends Controller
{
    public function index()
    {
        return view('kegiatan.index');
    }

    public function create()
    {
        $data['unitkerja'] = Unitkerja::all();
        return view('kegiatan.create', $data);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id_unitkerja' => 'required',
            'id_jabatan' => 'required',
            'pk_bk' => 'required',
            'tanggal' => 'required',
        ]);
        Kegiatan::create($validateData);
    }
}
