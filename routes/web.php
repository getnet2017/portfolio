<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', [ProjectController::class, 'show'])->name('projects');


Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

use Illuminate\Support\Facades\Mail;

Route::get('/test-mail', function () {
    Mail::raw('This is a test email from Laravel', function ($message) {
        $message->to('getnetamare29@gmail.com')
            ->subject('Test Email');
    });

    return 'Test email sent!';
});
Route::get('/emails/contact', function () {
    return view('emails.contact');
})->name('email.contact');