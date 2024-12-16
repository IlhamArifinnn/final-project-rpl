<?php

use App\Models\HealthArticle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChildDataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HealthArticleController;
use App\Models\User;

Route::get('/', function () {
    return view('index', [
        'articles' => HealthArticle::all(),
        'articlesCount' => HealthArticle::count(),
        'doctorsCount' => \App\Models\Doctor::count(),
        'childrenCount' => \App\Models\ChildData::count(),
        'usersCount' => User::count(),
    ]);
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // route data anak
    Route::resource('child_data', ChildDataController::class)
        ->parameters([
            'child_data' => 'child_data',
        ])->middleware(['auth']);

    // route artikel
    Route::resource('health_articles', HealthArticleController::class)
        ->middleware(['auth']);

    // route dokter
    Route::resource('doctors', DoctorController::class)
        ->middleware(['auth']);

    //route jadwal monitoring
    Route::resource('appointments', AppointmentController::class)
        ->middleware(['auth']);
});



require __DIR__ . '/auth.php';
