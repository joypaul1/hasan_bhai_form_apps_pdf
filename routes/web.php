<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormOneController;
use App\Http\Controllers\FormThreeController;
use App\Http\Controllers\FormFourController;
use App\Http\Controllers\FormTwoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', [AuthenticatedSessionController::class, 'create']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    // full RESTful resource:
    Route::resource('users', UserController::class);
    //
    // 1) Standard Customer CRUD
    //
    Route::resource('customers', CustomerController::class);

    //
    // 2) Your one-off “customerForm” action on CustomerCoxntroller
    //
    Route::get('customer-form/{id}', [CustomerController::class, 'customerForm'])
        ->name('customer-form');

    //
    // 3) Nested FormOne routes per customer
    //
    Route::prefix('customers/{customer}')
        ->whereNumber('customer')
        ->as('customers.')       // prefixes route names with "customers."
        ->group(function () {

            // GET  /customers/{customer}/form-one  → FormOneController@index
            Route::get('form-one', [FormOneController::class, 'index'])
                ->name('formOne.index');

            // POST /customers/{customer}/form-one  → FormOneController@store
            Route::post('form-one', [FormOneController::class, 'store'])
                ->name('formOne.store');

            // PUT  /customers/{customer}/form-one  → FormOneController@update
            Route::put('form-one', [FormOneController::class, 'update'])
                ->name('formOne.update');
        });

    Route::get('customers/{customer}/form-one/pdf/{type}', [FormOneController::class, 'pdfFormat'])
        ->name('customers.formOne.pdf');
    // Route::get('customers/{customer}/form-one/pdf', [FormOneController::class, 'pdfOne'])
    //     ->name('customers.formOne.pdfOne');

    Route::prefix('customers/{customer}')
        ->whereNumber('customer')
        ->as('customers.')           // route-name prefix
        ->group(function () {
            Route::get('form-two',    [FormTwoController::class, 'index'])
                ->name('formTwo.index');
            Route::post('form-two',   [FormTwoController::class, 'store'])
                ->name('formTwo.store');
            Route::put('form-two',    [FormTwoController::class, 'update'])
                ->name('formTwo.update');
        });
    Route::get('customers/{customer}/form-two/pdf/{type}', [FormTwoController::class, 'pdfFormat'])
        ->name('customers.formTwo.pdf');


    // … inside Route::middleware('auth')->group(...)
    Route::prefix('customers/{customer}')
        ->whereNumber('customer')
        ->as('customers.')
        ->group(function () {
            // Form Three
            Route::get('form-three', [FormThreeController::class, 'index'])
                ->name('formThree.index');

            Route::post('form-three', [FormThreeController::class, 'store'])
                ->name('formThree.store');

            Route::put('form-three', [FormThreeController::class, 'update'])
                ->name('formThree.update');
        });

    Route::get('customers/{customer}/form-three/pdf/{type}', [FormThreeController::class, 'pdfFormat'])
        ->name('customers.formThree.pdf');
    Route::prefix('customers/{customer}')
        ->whereNumber('customer')
        ->as('customers.')
        ->group(function () {
            Route::get('form-four', [FormFourController::class, 'index'])->name('formFour.index');
            Route::post('form-four', [FormFourController::class, 'store'])->name('formFour.store');
            Route::put('form-four', [FormFourController::class, 'update'])->name('formFour.update');
        });

    Route::get('customers/{customer}/form-four/pdf/{type}', [FormFourController::class, 'pdfFormat'])
        ->name('customers.formFour.pdf');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
