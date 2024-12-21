<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthController;


Route::middleware(['auth'])->group(function () {
    Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules.index');
    Route::post('/schedules', [ScheduleController::class, 'store'])->name('schedules.store');
    Route::put('/schedules/{schedule}', [ScheduleController::class, 'update'])->name('schedules.update');
    Route::delete('/schedules/{schedule}', [ScheduleController::class, 'destroy'])->name('schedules.destroy');
});

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);

 // Rute POST untuk mengirim data registrasi
Route::post('/register', [app\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.submit');

// Rute POST untuk mengirim data login
Route::post('/login', [app\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.submit');

// Halaman utama
Route::get('/main', [MainController::class, 'index'])->name('main')->middleware('auth');

// Halaman penjadwalan
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule')->middleware('auth');

// Halaman notifikasi
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications')->middleware('auth');

// Halaman edit profil
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/profile/edit', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

// Halaman utama (diperlukan login)
Route::get('/main', [MainController::class, 'index'])->name('main')->middleware('auth');

// Halaman penjadwalan (diperlukan login)
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule')->middleware('auth');

// Halaman notifikasi (diperlukan login)
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications')->middleware('auth');

// Halaman edit profil (diperlukan login)

Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/edit', [ProfileController::class, 'update'])->name('profile.update');


// Rute Login dan Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Rute default untuk halaman index
Route::get('/', function () {
    return view('auth.index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('auth.index');
})->name('index');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');


Route::get('/edit', function () {
    return view('edit'); // Nama file Blade tanpa ".blade.php"
});

Route::middleware(['auth'])->group(function () {
    Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules.index');
});
