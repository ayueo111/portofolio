<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminSkillController; 
use App\Http\Controllers\Admin\AdminCertificateController; 
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');
// Route::get('/', [HomeController::class,'index'])->name('/');

Route::get('project', function () {
    return view('project');
});
Route::get('project', [ProjectController::class,'index'])->name('project');

Route::get('skill', function () {
    return view('skill');
});
Route::get('skill', [SkillController::class,'index'])->name('skill');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
});
Route::get('contact', [ContactController::class,'index'])->name('contact');

Route::get('sertifikat', function () {
    return view('sertifikat');
});
Route::get('sertifikat', [CertificateController::class,'index'])->name('sertifikat');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index')->middleware('auth', 'admin');


Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::delete('/profile', [ProfileController::class, 'index']);
Route::get('/admin/dashboard', [AdminController::class,'index'])->name('admin.dashboard')->middleware('auth','admin');
Route::resource('admin/skill', AdminSkillController::class);
Route::resource('admin/certificate', AdminCertificateController::class);
Route::resource('admin/projects', AdminProjectController::class);
Route::resource('admin/contacts', AdminContactController::class);

require __DIR__.'/auth.php';
