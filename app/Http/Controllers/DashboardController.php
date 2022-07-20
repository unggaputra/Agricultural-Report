<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function view()
    {
        $petani = DB::table('petani')->get();
        $pupuk = DB::table('pupuk')->get();
        $bibit = DB::table('bibit')->get();
        $desa = DB::table('desa')->get();
        $lokasi = DB::table('lokasi')->join('desa', 'lokasi.id_desa', '=', 'desa.id_desa')
                                    ->select('lokasi.*','desa.nama_desa')
                                    ->get();
        $lahan = DB::table('lahan')->join('petani', 'lahan.id_lahan', '=', 'petani.id_petani')
                                    ->join('lokasi', 'lahan.id_lahan', '=', 'lokasi.id_lokasi')
                                    ->join('desa', 'lokasi.id_desa', '=', 'desa.id_desa')
                                    ->select('lahan.*', 'petani.nama_petani', 'lokasi.nama_lokasi', 'desa.nama_desa')
                                    ->get();
        $riwayat_pembelian_pupuk = DB::table('riwayat_pembelian_pupuk')->join('petani', 'riwayat_pembelian_pupuk.id_petani', '=', 'petani.id_petani')
                                                        ->join('pupuk', 'riwayat_pembelian_pupuk.id_pupuk', '=', 'pupuk.id_pupuk')
                                                        ->select('riwayat_pembelian_pupuk.*', 'petani.nama_petani', 'pupuk.nama_pupuk', 'pupuk.jenis_pupuk')
                                                        ->get();
        $riwayat_tanam = DB::table('riwayat_tanam')->join('lahan', 'riwayat_tanam.id_lahan', '=', 'lahan.id_lahan')
                                                    ->join('petani', 'petani.id_petani', '=', 'lahan.id_petani')
                                                    ->join('bibit', 'riwayat_tanam.id_bibit', '=', 'bibit.id_bibit')
                                                    ->join('pupuk', 'riwayat_tanam.id_pupuk', '=', 'pupuk.id_pupuk')
                                                    ->join('lokasi', 'lahan.id_lokasi', '=', 'lokasi.id_lokasi' )
                                                    ->join('desa', 'lokasi.id_desa', '=', 'desa.id_desa')
                                                    ->select('riwayat_tanam.*', 'petani.nama_petani','lokasi.nama_lokasi', 'desa.nama_desa', 'bibit.nama_bibit', 'pupuk.nama_pupuk')
                                                    ->get();
        return view('Contents.edit',['petani'=>$petani, 'pupuk' => $pupuk, 'bibit' => $bibit, 'desa' => $desa, 'lokasi' => $lokasi, 'lahan' => $lahan, 'riwayat_pembelian_pupuk' => $riwayat_pembelian_pupuk, 'riwayat_tanam' => $riwayat_tanam]);
    }

    public function getData()
    {
         $data = DB::table('riwayat')->limit(6)->get();
         return print_r($data);
        //  return view('Components.Script',['data' => $data]);
    }
    public function chart()
    {
        return view('Contents.report');
    }
}
