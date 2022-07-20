<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LokasiController extends Controller
{
    public function store(Request $request){
        DB::table('lokasi')->insert([
            'nama_lokasi'=>$request->nama,
            'id_desa'=>$request->id_desa
    ]);
    return redirect('/dashboard');
    }

    public function edit($val){
        $desa = DB::table('desa')->get();
        $lokasi = DB::table('lokasi')
                            ->join('desa', 'lokasi.id_desa', '=', 'desa.id_desa')
                            ->select('lokasi.*','desa.nama_desa')
                            ->where('id_lokasi', $val)
                            ->get();

        return view('Edit.editlokasi',['lokasi'=>$lokasi, 'desa'=>$desa]);
    }

    public function update(Request $request){
        DB::table('lokasi')
                        ->where('id_lokasi', $request->id)
                        ->update(['nama_lokasi'=>$request->nama, 'id_desa'=>$request->id_desa]);
        return redirect('/dashboard');
    }

    public function delete($id){
        DB::table('lokasi')->where('id_lokasi', $id)->delete();
        return redirect('/dashboard');
    }
}
