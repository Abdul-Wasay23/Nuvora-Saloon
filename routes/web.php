<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\BarberController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| FRONTEND PAGES
|--------------------------------------------------------------------------
*/
Route::get('/', fn() => view('pages.index'))->name('index');
Route::get('/aboutus', fn() => view('pages.about'));
Route::get('/services', fn() => view('pages.services'))->name('services');
Route::get('/service-detail', fn() => view('pages.service-detail'));
Route::get('/pricing', fn() => view('pages.pricing'));
Route::get('/gallery', fn() => view('pages.gallery'));
Route::get('/team', fn() => view('pages.team'));
Route::get('/contactus', fn() => view('pages.contact'));
Route::get('/appointment', fn() => view('pages.appointment'));
Route::get('/error', fn() => abort(404));

/*
|--------------------------------------------------------------------------
| AUTH ROUTES (BREEZE)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', fn() => view('pages.login'))->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| USER DASHBOARD
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    Route::get('/user/dashboard', fn() => view('auth.dashboard.user.pages.index'))
        ->name('user.dashboard');

    // User profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD + CRUD
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', function () {
            $services = \App\Models\Service::all();
            $barbers = \App\Models\Barber::all();
            return view('auth.dashboard.admin.pages.index', compact('services', 'barbers'));
        })->name('dashboard');

        // Services CRUD
        Route::resource('services', ServiceController::class);

        /*
        |--------------------------------------------------------------------------
        | BARBERS CRUD
        |--------------------------------------------------------------------------
        */
        Route::get('/barbers', [BarberController::class, 'index'])->name('barbers.index');
        Route::get('/barbers/create', [BarberController::class, 'create'])->name('barbers.create');
        Route::post('/barbers/store', [BarberController::class, 'store'])->name('barbers.store');
        Route::get('/barbers/{id}/edit', [BarberController::class, 'edit'])->name('barbers.edit');
        Route::put('/barbers/{id}/update', [BarberController::class, 'update'])->name('barbers.update');
        Route::delete('/barbers/{id}', [BarberController::class, 'destroy'])->name('barbers.destroy');
    });


/*
|--------------------------------------------------------------------------
| LOGIN REDIRECT (ADMIN OR USER)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->get('/dashboard-redirect', function () {

    return Auth::user()->role_id == 0
        ? redirect()->route('admin.dashboard')
        : redirect()->route('user.dashboard');

})->name('dashboard.redirect');


/*
|--------------------------------------------------------------------------
| PASSWORD RESET (BREEZE)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('/reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});
