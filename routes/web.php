<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    /**
     * Redirect routes
     */
    Route::redirect('home', 'profile');

    /**
     * Resources for authenticated users
     */
    Route::resources([
        'user' => \App\Http\Controllers\UserController::class,
    ]);

    /**
     * Post routes
     */
    Route::post('/action/edit/password/', [\App\Http\Controllers\UserController::class, 'editUserPassword']);

    /**
     * Routes for employee links with middleware
     * @var boolean isEmployee
     */
     Route::prefix('employee')->middleware('isEmployee')->group(function () {
        Route::get('profile', function () {
            return view('employee.home');
        })->name('profile');
     });
    Route::get('profile/dashboard', function () {
        return view('organisation.dashboard');
    })->name('dashboard');
    /**
     * Routes for organisation links with middleware
     * @var boolean isOrganisation
     */
     Route::prefix('organisation')->middleware('isOrganisation')->group(function () {
         Route::view('/', 'organisation.home');

         Route::get('employees', function () {
            return view('organisation.employees');
         });

         Route::get('employee/{id}', function ($id) {
             return $id;
         });

//         Route::get('dashboard', function () {
//            return view('organisation.dashboard');
//         });


     });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
