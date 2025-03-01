<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\Authentication;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// '/Dashboard'
Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboards.index')->middleware(Authentication::class);

// Book
Route::get('/Book', [BookController::class, 'index'])->name('books.index');
Route::get('/Book/create', [BookController::class, 'create'])->name('books.create')->middleware(Authentication::class);
Route::post('/Book/store', [BookController::class, 'store'])->name('books.store')->middleware(Authentication::class);
Route::get('/Book/edit/{id}', [BookController::class, 'edit'])->name('books.edit')->middleware(Authentication::class);
Route::put('Book/update', [BookController::class, 'update'])->name('books.update')->middleware(Authentication::class);
Route::delete('Book/delete/{id}', [BookController::class, 'destroy'])->name('books.destroy')->middleware(Authentication::class);

// Students
Route::get('/Student', [StudentController::class, 'index'])->name('students.index')->middleware(Authentication::class);
Route::get('/Student/create', [StudentController::class, 'create'])->name('students.create')->middleware(Authentication::class);
Route::post('/Student/store', [StudentController::class, 'store'])->name('students.store')->middleware(Authentication::class);
Route::get('Student/edit/{id}', [StudentController::class, 'edit'])->name('students.edit')->middleware(Authentication::class);
Route::put('Student/update', [StudentController::class, 'update'])->name('students.update')->middleware(Authentication::class);
Route::delete('Student/delete/{id}', [StudentController::class, 'destroy'])->name('students.destroy')->middleware(Authentication::class);

// Authors
Route::get('/Author', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/Author/create', [AuthorController::class, 'create'])->name('authors.create')->middleware(Authentication::class);
Route::post('/Author/store', [AuthorController::class, 'store'])->name('authors.store')->middleware(Authentication::class);
Route::get('/Author/edit/{id}', [AuthorController::class, 'edit'])->name('authors.edit')->middleware(Authentication::class);
Route::put('/Author/update', [AuthorController::class, 'update'])->name('authors.update')->middleware(Authentication::class);
Route::delete('Author/delete/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy')->middleware(Authentication::class);

// Category
Route::get('/Category', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/Category/create', [CategoryController::class, 'create'])->name('categories.create')->middleware(Authentication::class);
Route::post('/Category/store', [CategoryController::class, 'store'])->name('categories.store')->middleware(Authentication::class);

// BookCategory
Route::get('/BookCategory', [BookCategoryController::class, 'index'])->name('bookcategories.index');
Route::get('/BookCategory/create', [BookCategoryController::class, 'create'])->name('bookcategories.create')->middleware(Authentication::class);
Route::post('/BookCategory/store', [BookCategoryController::class, 'store'])->name('bookcategories.store')->middleware(Authentication::class);

// Auth
Route::get('/register', [AuthController::class, 'register'])->name('Auth.register');
Route::post('/register', [AuthController::class, 'handelRegister'])->name('Auth.handelRegister');
Route::get('/login', [AuthController::class, 'login'])->name('Auth.login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('Auth.handleLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('Auth.logout');
