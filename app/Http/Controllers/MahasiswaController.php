<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\crud;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function data2()
    {    
        $mahasiswa = DB::table('mahasiswa')->get();
        //return $mahasiswa;
        return view('mahasiswa.mahasiswa', ['mahasiswa'=> $mahasiswa]);
    }
    
    public function add()
    {
        return view('mahasiswa/add');
    }
    public function addProcess(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'NIM' => $request->Nnim,
            'Nama' => $request->Nnama,
            'Semester'=> $request->Nsemester,
            'Prodi' => $request->Nprodi,
            'Fakultas' => $request->Nfakultas,
        ]);
        return redirect('mahasiswa')->with('status', 'Data Berhasil Ditambah!');
    }
    public function edit()
    {
        $mahasiswa = DB::table('mahasiswa')->first();
        return view('mahasiswa/edit', compact('mahasiswa'));
    }
    public function editProcess(Request $request)
    {
        DB::table('mahasiswa')
        ->update([
            'NIM' => $request->Nnim,
            'Nama' => $request->Nnama,
            'Semester'=> $request->Nsemester,
            'Prodi' => $request->Nprodi,
            'Fakultas' => $request->Nfakultas,
        ]);
        return redirect('mahasiswa')->with('status', 'Data Berhasil Diperbarui!');
    }
    public function delete()
    {
        DB::table('mahasiswa')->delete();
        return redirect('mahasiswa')->with('status', 'Data Berhasil Dihapus!');
    }

}
