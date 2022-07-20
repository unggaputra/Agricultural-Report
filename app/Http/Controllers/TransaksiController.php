<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function store(Request $request){
        Db::table('riwayat_pembelian_pupuk')
        ->insert([
            'id_petani'=>$request->id_petani,
            'id_pupuk'=>$request->id_pupuk,
            'jumlah_karung'=>$request->jumlah
        ]);
        return redirect('/dashboard');
    }

    public function edit($val){
        $petani = DB::table('petani')->get();
        $pupuk = DB::table('pupuk')->get();
        $riwayat_pembelian_pupuk = DB::table('riwayat_pembelian_pupuk')
                    ->join('petani', 'riwayat_pembelian_pupuk.id_petani', '=', 'petani.id_petani')
                    ->join('pupuk', 'riwayat_pembelian_pupuk.id_pupuk', '=', 'pupuk.id_pupuk')
                    ->select('riwayat_pembelian_pupuk.*', 'petani.nama_petani', 'pupuk.nama_pupuk')
                    ->where('id_transaksi', $val)
                    ->get();
        return view('Edit.edittransaksi',['petani'=>$petani, 'pupuk'=>$pupuk, 'riwayat_pembelian_pupuk'=>$riwayat_pembelian_pupuk]);
    }

    public function update(Request $request){
        DB::table('riwayat_pembelian_pupuk')
        ->where('id_transaksi', $request->id)
        ->update(['id_petani'=>$request->id_petani, 'id_pupuk'=>$request->id_pupuk, 'jumlah_karung'=>$request->jumlah]);
        return redirect('/dashboard');
    }

    public function delete($val){
        DB::table('riwayat_pembelian_pupuk')->where('id_transaksi', $val)->delete();
        return redirect('/dashboard');
    }
}

