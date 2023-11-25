<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\MaxRecordsController;
use App\Http\Controllers\PastController;
use App\Http\Controllers\postController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/menus', [MenusController::class,'menus'])->name('menus');
Route::post('/menus/menu_add/menus', [MenusController::class,'post']);
Route::get('/records',[RecordsController::class,'records'])->middleware(['auth', 'verified'])->name('records');
Route::get('/past',[PastController::class,'past'])->name('past');
Route::post('/past_record',[PastController::class,'pastRecords']);
Route::post('/posts', [RecordsController::class, 'store']);
Route::get('/max',[MaxRecordsController::class,'max_records'])->name('max');
Route::get('/post',[postController::class,'post']);
Route::post('/pos',[postController::class,'max_store']);
Route::post('/record_post',[RecordsController::class,'store']);
Route::post('/graph', [MaxRecordsController::class,"show"]);
Route::get('/past_record/{records}/past_edit/',[RecordsController::class,"edit"]);
Route::match(['get','put'],'/past_record/{records}',[RecordsController::class,'update']);
Route::get('/menus/menu_add',[MenusController::class,'store']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
