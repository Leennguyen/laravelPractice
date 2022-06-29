<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use App\Http\Controllers\PhuongtrinhController;
use App\Http\Controllers\PheptinhController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('cars',CarController::class);


// Route::get('phuongtrinh',function(){
//     return view('phuongtrinh');
// });

// Route::get('pheptinh', function(){
//     return view('pheptinh');
// });
// Route::get('car-list', function(){
//     return view('car-list');
// });
Route::get('/car-create',[CarController::class, 'create']);
// Route::post('phuongtrinh',function(Request $req){
//     $a = $req->input('a');
//     $b = $req->input('b');

//     if($a == 0){
//         if($b == 0){
//             $kq = "Phương trình vô số nghiệm";
//         }
//         else{
//             $kq = "Phương trình vô nghiệm";
//         }
//     }
//     else{
//         $kq = "Phương trình có nghiệm x =" .-$b/$a;
//     }
//     return view('phuongtrinh', compact("a","b","kq"));

// }) -> name('phuongtrinh.post');

// Route::post('phuongtrinh',[PhuongtrinhController::class , 'Giaipt'] )-> name('phuongtrinh.post');
// Route::post('pheptinh',[PheptinhController::class, 'Tinh'])->name('pheptinh.post');
Route::get('/car-list',[CarController::class,'index']);
// Route::get('/car-create',[CarController::class,'create']);


Route::resource('cars',CarController::class);
