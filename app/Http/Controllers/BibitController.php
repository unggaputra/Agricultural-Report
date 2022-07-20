<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BibitController extends Controller
{
    public function store(Request $request){
        DB::table('bibit')->insert([
            'nama_bibit'=>$request->nama,
            'jenis_tanaman'=>$request->tanaman
        ]);
        return redirect('/dashboard');
    }

    public function edit($id){
        $bibit = DB::table('bibit')
                        ->where('id_bibit', $id)
                        ->get();
        return view('Edit.editbibit',['bibit'=>$bibit]);


    }

    public function update(Request $request){
        DB::table('bibit')
                    ->where('id_bibit', $request->id)
                    ->update(['nama_bibit'=>$request->nama, 'jenis_tanaman'=>$request->tanaman]);
        return redirect('/dashboard');
    }

    public function delete($id){
        DB::table('bibit')->where('id_bibit', $id)->delete();

        return redirect('/dashboard');
    }
}
