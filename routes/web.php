<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('home', ['name' => 'Josh']);
// });

Route::get('/', [PostController::class, 'index']);

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //View Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Retrieve create Post form
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    //Send create Post form
    Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
    //View Post
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
    //Send Comment on Post
    Route::post('/posts/{id}', [CommentController::class, 'store',])->name('posts.comments.store');
    //View User
    Route::get('/users/{id}', [UserController::class, 'show'])->name('profile.show');
    //Edit Post
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    //Save edited Post
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    // Delete Post
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.delete');
});

require __DIR__.'/auth.php';
