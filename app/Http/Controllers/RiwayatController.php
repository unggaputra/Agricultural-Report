<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RiwayatController extends Controller
{
    public function store(Request $request){
        DB::table('riwayat_tanam')->insert([
            'id_lahan'=>$request->id_lahan,
            'id_bibit'=>$request->id_bibit,
            'jumlah_bibit'=>$request->jumlah_bibit,
            'id_pupuk'=>$request->id_pupuk,
            'jumlah_pupuk'=>$request->jumlah_pupuk,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'total_hasil'=>$request->hasil
        ]);
        return redirect('/dashboard');
    }

    public function edit($val){
        $lahan = DB::table('lahan')
                            ->join('petani', 'lahan.id_petani', '=', 'petani.id_petani')
                            ->join('lokasi', 'lahan.id_lokasi', '=', 'lokasi.id_lokasi')
                            ->join('desa', 'lokasi.id_desa', '=', 'desa.id_desa')
                            ->select('lahan.*', 'petani.nama_petani', 'lokasi.nama_lokasi', 'desa.nama_desa')
                            ->get();
        $petani = DB::table('petani')->get();
        $bibit = DB::table('bibit')->get();
        $pupuk = DB::table('pupuk')->get();
        $lokasi = DB::table('lokasi')->get();
        $desa = DB::table('desa')->get();
        $riwayat_tanam = DB::table('riwayat_tanam')->join('lahan', 'riwayat_tanam.id_lahan', '=', 'lahan.id_lahan')
                                                    ->join('petani', 'petani.id_petani', '=', 'lahan.id_petani')
                                                    ->join('bibit', 'riwayat_tanam.id_bibit', '=', 'bibit.id_bibit')
                                                    ->join('pupuk', 'riwayat_tanam.id_pupuk', '=', 'pupuk.id_pupuk')
                                                    ->join('lokasi', 'lahan.id_lokasi', '=', 'lokasi.id_lokasi' )
                                                    ->join('desa', 'lokasi.id_desa', '=', 'desa.id_desa')
                                                    ->select('riwayat_tanam.*', 'lahan.*', 'petani.*','lokasi.*', 'desa.*', 'bibit.*', 'pupuk.*')
                                                    ->where('id_riwayat_tanam', $val)
                                                    ->get();
        return view('Edit.editriwayat',['lahan'=>$lahan, 'petani'=>$petani, 'bibit'=>$bibit, 'pupuk'=>$pupuk, 'lokasi'=>$lokasi, 'desa'=>$desa, 'riwayat_tanam'=>$riwayat_tanam]);
    }

    public function update(Request $request){
        DB::table('riwayat_tanam')
        ->where('id_riwayat_tanam', $request->id)
        ->update(['id_lahan'=>$request->id_lahan,
        'id_bibit'=>$request->id_bibit,
        'jumlah_bibit'=>$request->jumlah_bibit,
        'id_pupuk'=>$request->id_pupuk,
        'jumlah_pupuk'=>$request->jumlah_pupuk,
        'start_date'=>$request->start_date,
        'end_date'=>$request->end_date,
        'total_hasil'=>$request->total_hasil
        ]);
        return redirect('/dashboard');
    }

    public function delete($id){
        DB::table('riwayat_tanam')->where('id_riwayat_tanam', $id)->delete();
        return redirect('/dashboard');
    }
}
