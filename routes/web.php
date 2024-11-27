<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\portblogController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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
// guest routes
/*

TODO
  
    create home controller to handle and process all the data of the index 
    add odd functionality to input fields in all the form fields

*/
Route::get('/', function () {
    return view('index');
})->name('index');

//Route::get('/',[SiteController::class, 'index'])->name('index');


// blog routes

Route::get('/blog',[portblogController::class, 'indexblog'])->name('blog');
Route::get('/blog/single/{id}/{slug}',[portblogController::class, 'showblog'])->name('single-blog');

// blog  admin routes
Route::get('/create/blog',[portblogController::class, 'createblog'])->name('add-blog')->prefix("admin");
Route::post('/create/blog',[portblogController::class, 'storeblog'])->prefix("admin");
Route::get('/view/blogs',[portblogController::class, 'ViewAllBlog'])->name('ViewAllblog')->prefix("admin");
Route::delete('/delete/blog/{id}',[portblogController::class, 'Deleteblog'])->name('deleteblog')->prefix("admin");



// portfolio route
Route::get('/portfolio/single',[portblogController::class, 'showport'])->name('single-portfolio');

// portfolio admin route





// login routes

Route::get('/admin/login',[adminController::class, 'loginIndex'])->name('login');
Route::post('/admin/login',[adminController::class, 'login'])->name('auth-login');




// admin routes



Route::get('/admin', [adminController::class, 'index'])->name('admin.index');
Route::get('/admin/edit/hero/',[adminController::class, 'editHero'])->name('admin.edit-hero');

Route::put('/admin/edit/hero/{hero}',[adminController::class, 'updateHero'])->name('admin.edit-hero-update');

Route::get('/admin/edit/about-us', [adminController::class, 'editAbout'])->name('admin.edit-about-us');

Route::put('/admin/edit/about-us/{about}', [adminController::class, 'updateAbout'])->name('admin.edit-about-us-update');

Route::get('/admin/edit/company', [adminController::class, 'editCompany'])->name('admin.edit-trust-company');

Route::get('/admin/edit/action',  [adminController::class, 'editAction'])->name('admin.edit-action');

Route::get('/admin/add/service',  [adminController::class, 'addService'])->name('admin.add-service');

Route::get('/admin/edit/service', [adminController::class, 'editService'])->name('admin.manage-service');