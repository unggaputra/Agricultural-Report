<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PupukController extends Controller
{
    public function store(Request $request){
        DB::table('pupuk')->insert([
            'nama_pupuk'=>$request->nama,
            'jenis_pupuk'=>$request->jenis
        ]);
        return redirect('/dashboard');
    }

    public function edit($id){
        $pupuk = DB::table('pupuk')
                        ->where('id_pupuk', $id)
                        ->get();
        return view('Edit.editpupuk',['pupuk'=>$pupuk]);


    }

    public function update(Request $request){
        DB::table('pupuk')
                    ->where('id_pupuk', $request->id)
                    ->update(['nama_pupuk'=>$request->nama, 'jenis_pupuk'=>$request->jenis]);
        return redirect('/dashboard');
    }

    public function delete($id){
        DB::table('pupuk')->where('id_pupuk', $id)->delete();

        return redirect('/dashboard');
    }
}
