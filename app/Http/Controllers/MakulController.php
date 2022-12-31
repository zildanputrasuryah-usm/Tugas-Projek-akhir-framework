<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakulController extends Controller
//
{
    public function data3()
    {
        $makul = DB::table('makul')->get();
        //return $makul;
        return view('makul/makul',['makul'=>$makul]);
    }
    public function add()
    {
        return view('makul.add');
    }
    public function addProcess(Request $request)
    {
        DB::table('makul')->insert([
            'Makul' => $request->Nmakul,
            'Dosen' => $request->Ndosen,
            'SKS'=> $request->Nsks,
            'Hari' => $request->Nhari,
            'Ruang' => $request->Nruang,
        ]);
        return redirect('makul')->with('status', 'Data Berhasil Ditambah!');
    }
    public function edit()
    {
        $makul = DB::table('makul')->first();
        return view('makul/edit', compact('makul'));
    }
    public function editProcess(Request $request)
    {
        DB::table('makul')
        ->update([
            'Makul' => $request->Nmakul,
            'Dosen' => $request->Ndosen,
            'SKS'=> $request->Nsks,
            'Hari' => $request->Nhari,
            'Ruang' => $request->Nruang,
        ]);
        return redirect('makul')->with('status', 'Data Berhasil Ditambah!');
    }
    public function delete()
    {
        DB::table('makul')->delete();
        return redirect('makul')->with('status', 'Data Berhasil Dihapus!');
    }

}
