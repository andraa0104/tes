<?php

namespace App\Http\Controllers;

use App\Models\gaji;
use Illuminate\Http\Request;

class gajiController extends Controller
{
    public function create() {

        return view('components.form-penggajian');
    }

    public function store (Request $request) {

        $request->validate([
            'nip' => 'required',
        'nama'=> 'required',
        'jabatan'=> 'required',
        'departemen'=> 'required',
        'penempatan'=> 'required',
        'namabank'=> 'required',
        'hariefektifkerja'=> 'required',
        'harikerja'=> 'required',
        'izinkerja'=> 'required',
        'sakitkerja'=> 'required',
        'alfakerja'=> 'required',
        'cutikerja'=> 'required',
        'gajipokok'=> 'required',
        'tunjanganmakan'=> 'required',
        'kesehatan'=> 'required',
        'jkm'=> 'required',
        'jkk'=> 'required',
        'jht'=> 'required',
        'jp'=> 'required',
        'pph21'=> 'required',
        'pinjaman'=> 'required',
        'cicilan'=> 'required',
        'gajikotor'=> 'required',
        'potongan'=> 'required',
        'gajibersih'=> 'required',
        'norek'=> 'required',
        // 'status'=> 'required',
        // 'jabatanapprove'=> 'required',
        // 'penempatanapprove'=> 'required',
        // 'statusapprove' => 'required'
        ]);
        gaji::create($request->all());
        return redirect('/gaji');
    }
}
