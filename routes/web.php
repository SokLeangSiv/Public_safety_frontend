<?php

use App\Http\Controllers\ContactUs;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceReport;
use App\Http\Controllers\Feedback;

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


        //get form

        Route::get('/reports', 'showForm')->name('show.form');

        //post form

        Route::post('/reports/create', 'storeForm')->name('store.form');


    });

    Route::controller(ContactUs::class)->group(function(){

        //contact-us

        Route::get('/contact-us', 'showContact')->name('show.contact.us');
        
        //about us

        Route::get('/about-us', 'showAbout')->name('show.about.us');

    });

    Route::controller(ServiceReport::class)->group(function(){

        //service report
        Route::get('/service/fire', 'showService')->name('show.fire');

        //emergency
        
        Route::get('/emergency' , 'showEmergency')->name('show.emergency');
        
    });

    Route::controller(Feedback::class)->group(function(){

        //feedback

        Route::get('/feedback', 'showFeedback')->name('show.feedback');

    });


});





require __DIR__.'/auth.php';
