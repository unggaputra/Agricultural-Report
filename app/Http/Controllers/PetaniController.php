<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetaniController extends Controller
{
    public function store(Request $request){

        DB::table('petani')->insert([
                'nama_petani'=>$request->nama,
                'no_telepon'=>$request->telepon
        ]);
        return redirect('/dashboard');
    }

    public function edit($id){
        $petani = DB::table('petani')
                            ->where('id_petani', $id)
                            ->get();
        return view('Edit.editpetani',['petani'=>$petani]);
    }

    public function update(Request $request){
        DB::table('petani')
                    ->where('id_petani', $request->id)
                    ->update(['nama_petani'=>$request->nama, 'no_telepon'=>$request->no]);
                    //return dd($_POST['id']);
       return redirect('/dashboard');
    }

    public function delete($id)
    {
        DB::table('petani')->where('id_petani',$id)->delete();

        return redirect('/dashboard');
    }

}
