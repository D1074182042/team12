<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChannelsController;
use App\Http\Controllers\YoutubersController;

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

Route::get('/', function () {
    return view('welcome');
});
/*----------------------Channels-----------------------*/
//查詢
/*Route::get('channels', function () {
    return view('channels.index');*/
Route::get('channels',[ChannelsController::class,'index'])->name('channels.index');
//新增表單
Route::get('channels/create',[ChannelsController::class,'create'])->name('channels.create');

// 新增資料
Route::post('channels/store', [ChannelsController::class, 'store'])->name('channels.store');

//顯示單筆頻道資料
Route::get('channels/{id}',[ChannelsController::class,'show'])
->where('id', '[0-9]+')->name('channels.show');
//修改表單
Route::get('channels/{id}/edit',[ChannelsController::class,'edit'])
->where('id', '[0-9]+')->name('channels.edit');

// 刪除資料
Route::delete('channels/delete/{id}', [ChannelsController::class, 'destroy'])->where('id', '[0-9]+')->name('channels.destroy');

/*-----------------------Youtubers--------------------------*/
//查詢
Route::get('youtubers', [YoutubersController::class,'index'])->name('youtubers.index');
//新增表單
Route::get('youtubers/create', [YoutubersController::class,'create'])->name('youtubers.create');

// 新增資料
Route::post('youtubers/store', [YoutubersController::class, 'store'])->name('youtubers.store');

//顯示單筆youtuber資料
Route::get('youtubers/{id}', [YoutubersController::class,'show'])
->where('id', '[0-9]+')->name('youtubers.show');
//修改表單
Route::get('youtubers/{id}/edit', [YoutubersController::class,'edit'])
->where('id', '[0-9]+')->name('youtubers.edit');


// 修改資料
Route::patch('youtubers/update/{id}', [YoutubersController::class, 'update'])->where('id', '[0-9]+')->name('youtubers.update');
// 刪除資料
Route::delete('youtubers/delete/{id}', [YoutubersController::class, 'destroy'])->where('id', '[0-9]+')->name('youtubers.destroy');
