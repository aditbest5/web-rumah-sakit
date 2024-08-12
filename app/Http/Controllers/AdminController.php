<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function main()
    {
        return view('pages.dashboard');
    }
    
    public function indexSpesialis() {
        $spesialis = DB::table('spesialis')->get();
        return view('pages.spesialis.spesialis', ['spesialis' => $spesialis]);
    }

    public function create() {
        return view('pages.spesialis.add');
    }
    public function store(Request $request) {
        $request->validate([
            'spesialis' => 'required'
        ]);

        DB::table('spesialis')->insert([
            'spesialis' => $request['spesialis']
        ]);

        return redirect('/admin/spesialis');
    }

    public function updateForm($id) {
        $spesialis = DB::table('spesialis')->where('id', $id)->first();
        return view('pages.spesialis.update', ['spesialis' => $spesialis]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'spesialis' => 'required'
        ]);

        DB::table('spesialis')
              ->where('id', $id)
              ->update(
                [
                    'spesialis' => $request->spesialis
                ]
            );
        
        return redirect('/admin/spesialis');
    }
    public function show($id) {
        $spesialis = DB::table('spesialis')->where('id', $id)->first();
        return view('pages.spesialis.info', ['spesialis' => $spesialis]);
    }
    public function destroy($id) {
        DB::table('spesialis')->where('id', $id)->delete();
        return redirect('/admin/spesialis');
    }


    // =================
    public function indexDokter() {
        $dokter = DB::table('dokter')->get();
        return view('pages.dokter.dokter', ['dokter' => $dokter]);
    }
    public function createDokter() {
        $spesialis = DB::table('spesialis')->get();
        return view('pages.dokter.add', ['spesialis' => $spesialis]);
    }
    public function storeDokter(Request $request) {
        $request->validate([
            'nama' => 'required',
            'spesialis_id' => 'required'
        ]);

        DB::table('dokter')->insert([
            'nama' => $request['nama'],
            'spesialis_id' => $request['spesialis_id']
        ]);

        return redirect('/admin/dokter');
    }
    public function updateFormDokter($id) {
        $dokter = DB::table('dokter')->where('id', $id)->first();
        $spesialis = DB::table('spesialis')->get();
        return view('pages.dokter.update', ['dokter' => $dokter], ['spesialis' => $spesialis]);
    }

    public function updateDokter(Request $request, $id) {
        $request->validate([
            'nama' => 'required',
            'spesialis_id' => 'required'
        ]);

        DB::table('dokter')
              ->where('id', $id)
              ->update(
                [
                    'nama' => $request->nama,
                    'spesialis_id' => $request->spesialis_id
                ]
            );
        
        return redirect('/admin/dokter');
    }
    public function showDokter($id) {
        $dokter = DB::table('dokter')->where('id', $id)->first();
        $spesialis = DB::table('spesialis')->get();
        return view('pages.dokter.info', ['dokter' => $dokter], ['spesialis' => $spesialis]);
    }
    public function destroyDokter($id) {
        DB::table('dokter')->where('id', $id)->delete();
        return redirect('/admin/dokter');
    }
}
