<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddController extends Controller
{
    public function view()
    {
        $petani = DB::table('petani')->get();
        $desa = DB::table('desa')->get();
        $lokasi = DB::table('lokasi')->join('desa', 'lokasi.id_desa', '=', 'desa.id_desa')
                                    ->select('lokasi.*','desa.nama_desa')
                                    ->get();
        $lahan = DB::table('lahan')->join('petani', 'lahan.id_petani', '=', 'petani.id_petani')
                                    ->join('lokasi', 'lahan.id_lokasi', '=', 'lokasi.id_lokasi')
                                    ->join('desa', 'lokasi.id_desa', '=', 'desa.id_desa')
                                    ->select('lahan.*', 'petani.nama_petani', 'lokasi.nama_lokasi', 'desa.nama_desa')
                                    ->orderBy('id_lahan','asc')
                                    ->get();
        $pupuk = DB::table('pupuk')->get();
        $bibit = DB::table('bibit')->get();
        $riwayat_pembelian_pupuk = DB::table('riwayat_pembelian_pupuk')->join('petani', 'riwayat_pembelian_pupuk.id_petani', '=', 'petani.id_petani')
                                                        ->join('pupuk', 'riwayat_pembelian_pupuk.id_pupuk', '=', 'pupuk.id_pupuk')
                                                        ->select('riwayat_pembelian_pupuk.*', 'petani.nama_petani', 'pupuk.nama_pupuk', 'pupuk.jenis_pupuk')
                                                        ->get();
        return view('Contents.add',['desa'=>$desa, 'lokasi'=>$lokasi, 'petani'=>$petani, 'lahan'=>$lahan, 'pupuk'=>$pupuk, 'bibit'=>$bibit, 'riwayat_pembelian_pupuk'=>$riwayat_pembelian_pupuk]);
    }
}
