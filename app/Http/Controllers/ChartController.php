<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChartController extends Controller
{
    public function index()
    {
        $record = DB::table('pupuk')
            ->get();

        $data = [];

        foreach ($record as $row) {
            $data['label'][] = $row->jenis_pupuk;
        }

        $data['chart_data'] = json_encode($data);
        return view('Contents.report', $data);
    }
    public function getDataPie()
    {
        $data = DB::select('SELECT sum(jumlah_karung) as Jumlah_Pupuk ,pupuk.nama_pupuk as Pupuk FROM `riwayat_pembelian_pupuk` inner join pupuk on(riwayat_pembelian_pupuk.id_pupuk = pupuk.id_pupuk) group by Pupuk order by Jumlah_Pupuk desc;');
        $json = json_encode($data);
        return $json;
    }
    public function getDataLine()
    {
        $data = DB::select('select end_date,SUM(total_hasil) as Jumlah
        from riwayat_tanam
        group by EXTRACT(year FROM end_date);');
        $json = json_encode($data);
        return $json;
    }
}
