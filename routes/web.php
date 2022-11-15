<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| php artisan storage:link  حفظ مسار الملفات عمل لها  ربط
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//تخزين الصور عبر الستورج على الاستضافة 
Route::get('/', function () {
    return view('welcome');
});
Route::get('/uploadFile',[UploadController::class,'index']);
// البيانات تحفظ
Route::post('/uploadFile',[UploadController::class,'create'])->name('uploadImage');
