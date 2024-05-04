<?php

use App\Http\Controllers\ContactUs;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    
    Route::controller(ReportController::class)->group(function(){

        Route::get('/reports', 'showForm')->name('show.form');

    });

    Route::controller(ContactUs::class)->group(function(){

        Route::get('/contact-us', 'showContact')->name('show.contact.us');
        
        //about us

        Route::get('/about-us', 'showAbout')->name('show.about.us');

    });

});





require __DIR__.'/auth.php';
