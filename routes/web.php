<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('/contact', 'contact')->name('contact');

Route::view('/about', 'about')->name('about');

$posts = [
    ["title"=>"primer post", "content"=>"Este es el contenido del primer post"],
    ["title"=>"segundo post", "content"=>"Este es el contenido del segundo post"],
    ["title"=>"tercer post", "content"=>"Este es el contenido del tercer post"],
];

Route::view('/blog', 'blog', ['posts'=>$posts])->name('blog');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';