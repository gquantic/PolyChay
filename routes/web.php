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

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('selectType');
    });

    Route::resources(['employee/users' => \App\Http\Controllers\UserController::class,]);

    /**
     * Post routes
     */
    Route::post('/action/edit/password/', [\App\Http\Controllers\UserController::class, 'editUserPassword']);

    /**
     * ADMIN ROUTES
     */
    Route::prefix('admin')->middleware('isAdmin')->group(function () {
        Route::get('profile', function () {
            return view('admin.organisation');
        })->name('admin-profile');

        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('admin-dashboard');

        Route::get('transacts', function () {
            return view('admin.transacts');
        })->name('admin-transacts');

        Route::get('referals', function () {
            return view('admin.referals');
        })->name('admin-referals');

    });
    /**
     * Routes for EMPLOYEE
     * @var boolean isEmployee
     */
    Route::prefix('employer')->middleware('isEmployer')->group(function () {
        Route::get('dashboard', function () {
            return view('employer.dashboard');
        })->name('employer-dashboard');

        Route::get('edit', function () {
            return view('employer.employer-edit');
        })->name('employer-edit');

        Route::get('login', function () {
            return view('employee.employeeAuth');
        });
    });

//    Route::get('')

//     Route::get('profile/no-accepted', function (){
//         return view('organisation.noaccepted');
//     });

    /**
     * Routes for organisation links with middleware
     * @var boolean isOrganisation
     */
    Route::prefix('organisation')->middleware('isOrganisation')->group(function () {
        Route::view('/', 'organisation.home');

        Route::get('employees', function () {
            return view('organisation.employees');
        });

    });
});

Auth::routes();
