<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\crud;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    
    public function data()
    {
        $dosen = DB::table('dosen')->get();

        //return $dosen;
        return view('dosen.dosen',['dosen'=>$dosen]);
    }
    public function add()
    {
        return view('dosen.add');
    }
    public function addProcess(Request $request)
    {
        DB::table('dosen')->insert([
            'NIDN' => $request->Nnidn,
            'Nama' => $request->Nnama,
            'Pendidikan'=> $request->Npendidikan,
            'Makul' => $request->Nmakul,
            'Status' => $request->Nstatus,
        ]);
        return redirect('dosen')->with('status', 'Data Berhasil Ditambah!');
    }
    public function edit()
    {
        $dosen = DB::table('dosen')->first();
        return view('dosen.edit', compact('dosen'));
        //return redirect('dosen')->with('status', 'Data Berhasil Diperbarui!');
    }
    public function editProcess(Request $request)
    {
        DB::table('dosen')->update([
            'NIDN' => $request->Nnidn,
            'Nama' => $request->Nnama,
            'Pendidikan'=> $request->Npendidikan,
            'Makul' => $request->Nmakul,
            'Status' => $request->Nstatus,
        ]);
        return redirect('dosen')->with('status', 'Data Berhasil Diperbarui!');
    }
    public function delete()
    {
        DB::table('dosen')->delete();
        return redirect('dosen')->with('status', 'Data Berhasil Dihapus!');
    }
}
