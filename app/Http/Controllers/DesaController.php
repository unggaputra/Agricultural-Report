<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesaController extends Controller
{
    public function store(Request $request){

        DB::table('desa')->insert([
                'nama_desa'=>$request->nama,
        ]);
        return redirect('/dashboard');
    }

    public function edit($val){
        $desa = DB::table('desa')
                            ->where('id_desa', $val)
                            ->get();
        return view('Edit.editdesa',['desa'=>$desa]);
    }

    public function update(Request $request){
        DB::table('desa')
                    ->where('id_desa', $request->id)
                    ->update(['nama_desa'=>$request->nama]);
                    //return dd($_POST['id']);
       return redirect('/dashboard');
    }

    public function delete($id)
    {
        DB::table('desa')->where('id_desa',$id)->delete();

        return redirect('/dashboard');
    }

}
