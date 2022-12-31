<?php

use App\Http\Controller\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MakulController;
use App\Models\dosen;
use App\Models\mahasiswa;
use App\Models\makul;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::get('/', function () {
    return view('welcome');
});
//Route::get('utama', function(){
 //   return view('main');
//});

Route::get('/dashboard', function () {
    return view('main');
})->middleware(['auth', 'verified'])->name('main');

Route::get('/dashboard', function () {
    $dosen = dosen::count();
    $mhs   = mahasiswa::count();
    $makul = makul::count();
    return view('main', compact('dosen','mhs','makul'));
});
//route dosen
 Route::get('/dosen', function(){
     return view('dosen.dosen');
 });
 
 Route::get('/tambah', function(){
    return view('dosen.add');
});

Route::get('/edit', function(){
    return view('dosen.edit');
});

//route mahasiswa
Route::get('/mahasiswa', function(){
    return view('mahasiswa.mahasiswa');
});
Route::get('/tambah', function(){
    return view('mahasiswa.add');
});
// Route::get('/edit', function(){
//     return view('makul.edit');
// });

//route makul
Route::get('/makul', function(){
    return view('makul.makul');
});
Route::get('/tambah', function(){
    return view('makul.add');
});
// Route::get('/edit', function(){
//     return view('makul.edit');
// });

//-------------------------------------------------------------------------------------------
//route DosenController
Route::get('dosen', [DosenController::class,'data']);
Route::get('dosen/add', [DosenController::class, 'add']);
Route::post('dosen', [DosenController::class, 'addProcess']);
Route::get('dosen/edit/', [DosenController::class, 'edit']);
Route::patch('dosen', [DosenController::class, 'editProcess']);
Route::delete('dosen', [DosenController::class, 'delete']);

//route MahasiswaController
Route::get('mahasiswa', [MahasiswaController::class,'data2']);
Route::get('mahasiswa/add', [MahasiswaController::class, 'add']);
Route::post('mahasiswa', [MahasiswaController::class, 'addProcess']);
Route::get('mahasiswa/edit', [MahasiswaController::class, 'edit']);
Route::patch('mahasiswa', [MahasiswaController::class, 'editProcess']);
Route::delete('mahasiswa', [MahasiswaController::class, 'delete']);

//route MakulController
Route::get('makul', [MakulController::class,'data3']);
Route::get('makul/add', [MakulController::class,'add']);
Route::post('makul', [MakulController::class, 'addProcess']);
Route::get('makul/edit', [MakulController::class, 'edit']);
Route::patch('makul', [MakulController::class, 'editProcess']);
Route::delete('makul', [MakulController::class, 'delete']);

//-------------------------------------------------------------------------------------------
//middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//route DosenController
Route::get('dosen', [DosenController::class,'data'])->middleware('auth');
Route::get('dosen/add', [DosenController::class, 'add'])->middleware('auth');
Route::post('dosen', [DosenController::class, 'addProcess'])->middleware('auth');
Route::get('dosen/edit/', [DosenController::class, 'edit'])->middleware('auth');
Route::patch('dosen', [DosenController::class, 'editProcess'])->middleware('auth');
Route::delete('dosen', [DosenController::class, 'delete'])->middleware('auth');

//route MahasiswaController
Route::get('mahasiswa', [MahasiswaController::class,'data2'])->middleware('auth');
Route::get('mahasiswa/add', [MahasiswaController::class, 'add'])->middleware('auth');
Route::post('mahasiswa', [MahasiswaController::class, 'addProcess'])->middleware('auth');
Route::get('mahasiswa/edit', [MahasiswaController::class, 'edit'])->middleware('auth');
Route::patch('mahasiswa', [MahasiswaController::class, 'editProcess'])->middleware('auth');
Route::delete('mahasiswa', [MahasiswaController::class, 'delete'])->middleware('auth');

//route MakulController
Route::get('makul', [MakulController::class,'data3'])->middleware('auth');
Route::get('makul/add', [MakulController::class,'add'])->middleware('auth');
Route::post('makul', [MakulController::class, 'addProcess'])->middleware('auth');
Route::get('makul/edit', [MakulController::class, 'edit'])->middleware('auth');
Route::patch('makul', [MakulController::class, 'editProcess'])->middleware('auth');
Route::delete('makul', [MakulController::class, 'delete'])->middleware('auth');

//route main
//Route::get('dashboard', [MakulController::class,'data3'])->middleware('auth');



Route::get('/create', [DosenController::class, 'create'])->name('create')->middleware('auth');
Route::post('store-dosen', [DosenController::class, 'store'])->middleware('auth');
Route::get('/read', [DosenController::class, 'read'])->name('read')->middleware('auth');
Route::get('/delete', [DosenController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/edit', [DosenController::class, 'edit'])->name('update')->middleware('auth');

Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);