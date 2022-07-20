<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LahanController extends Controller
{
    public function store(Request $request){
        DB::table('lahan')->insert([
            'id_petani'=>$request->id_petani,
            'id_lokasi'=>$request->id_lokasi,
            'luas'=>$request->luas
        ]);
        return redirect('/dashboard');
    }

    public function edit($val){
        $petani = DB::table('petani')->get();
        $lokasi = DB::table('lokasi')->join('desa', 'lokasi.id_desa', '=', 'desa.id_desa')
                                    ->select('lokasi.*','desa.nama_desa')
                                    ->get();
        $desa = DB::table('desa')->get();
        $lahan = DB::table('lahan')
                            ->join('petani', 'lahan.id_petani', '=', 'petani.id_petani')
                            ->join('lokasi', 'lahan.id_lokasi', '=', 'lokasi.id_lokasi')
                            ->join('desa', 'lokasi.id_desa', '=', 'desa.id_desa')
                            ->select('lahan.*', 'petani.nama_petani', 'lokasi.nama_lokasi', 'desa.nama_desa')
                            ->where('id_lahan', $val)
                            ->get();
        return view('Edit.editlahan',['lahan'=>$lahan, 'petani'=>$petani, 'lokasi'=>$lokasi, 'desa'=>$desa]);
    }

    public function update(Request $request){
        DB::table('lahan')
        ->where('id_lahan', $request->id)
        ->update(['id_petani'=>$request->id_petani, 'id_lokasi'=>$request->id_lokasi, 'luas'=>$request->luas]);
        return redirect('/dashboard');
    }

    public function delete($id){
        DB::table('lahan')->where('id_lahan', $id)->delete();
        return redirect('/dashboard');
    }

}
