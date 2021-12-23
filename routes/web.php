<?php

use App\Http\Controllers\back\BackHomeController;
use App\Http\Controllers\front\FrontHomeController;

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

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

require_once __DIR__ .'/jetstram.php';


Route::get('/',[FrontHomeController::class,'index'])->name('front.index');
Route::get('/kurumsal',[FrontHomeController::class,'about'])->name('front.hakkinda');
Route::get('/video',[FrontHomeController::class,'video'])->name('front.video');
Route::get('/iletisim',[FrontHomeController::class,'contact'])->name('front.iletisim');
Route::get('/proje',[FrontHomeController::class,'project'])->name('front.proje');
Route::get('/kategori/{category}',[FrontHomeController::class,'category'])->name('front.kategori');
Route::get('/blog/{slug}',[FrontHomeController::class,'blog'])->name('front.blog');

Route::get('/projeler/{slug}',[FrontHomeController::class,'projects'])->name('front.projeler');

Route::get('dene',[BackHomeController::class,'index'])->name('admin.index');


Route::group(['middleware'=>['auth:sanctum'],'prefix'=>'admin'],function(){

    Route::group(['middleware'=>['isAdmin']],function(){
        Route::get('blog',[BackHomeController::class,'blog'])->name('admin.blog');
        Route::get('yorum',[BackHomeController::class,'comment'])->name('admin.comment');
        Route::get('kategori',[BackHomeController::class,'category'])->name('admin.category');
        Route::get('video',[BackHomeController::class,'video'])->name('admin.video');
        Route::get('kurumsal',[BackHomeController::class,'about'])->name('admin.about');
        Route::get('video',[BackHomeController::class,'video'])->name('admin.video');
        Route::get('proje',[BackHomeController::class,'project'])->name('admin.project');
        Route::get('iletisim',[BackHomeController::class,'concact'])->name('admin.concact');
        Route::get('uyelistesi',[BackHomeController::class,'userlist'])->name('admin.userlist');
        Route::get('kullanici',[BackHomeController::class,'user'])->name('admin.user');
    });

    Route::group(['middleware'=>['isModerator']],function(){
        Route::get('blog',[BackHomeController::class,'blog'])->name('admin.blog');
        Route::get('yorum',[BackHomeController::class,'comment'])->name('admin.comment');
        Route::get('kategori',[BackHomeController::class,'category'])->name('admin.category');
        Route::get('video',[BackHomeController::class,'video'])->name('admin.video');
        Route::get('kullanici',[BackHomeController::class,'user'])->name('admin.user');
    });

    Route::group(['middleware'=>['isUser']],function(){
        Route::get('kullanici',[BackHomeController::class,'user'])->name('admin.user');
    });

    Route::get('panel',[BackHomeController::class,'index'])->name('admin.index');

});
