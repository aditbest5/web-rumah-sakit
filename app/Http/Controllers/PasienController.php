<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;  
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    //
    public function index()
    {
        $idUser = Auth::id();

        $detailPasien = Pasien::where('user_id', $idUser)->first();

        return view('profile.index', ['detailPasien' => $detailPasien]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'umur' => 'required',
            'penyakit' => 'required'
        ]);

        $pasien = Pasien::find($id);
        $pasien->umur = $request->umur;
        $pasien->alamat = $request->alamat;
        $pasien->penyakit = $request->penyakit;
        $pasien->save();

        return redirect('/pasien');


    }
}
