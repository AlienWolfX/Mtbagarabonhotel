<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;



route::get('/', [HomeController::class,'home']);

route::get('/dashboard', [HomeController::class,'login_home'])
->middleware(['auth', 'verified'])->name('dashboard');;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard', [HomeController::class, 'index'])-> middleware(['auth','admin']);


route::get('/create_room', [HomeController::class,'create_room'])-> middleware(['auth','admin']);


route::post('/add_room', [HomeController::class,'add_room'])-> middleware(['auth','admin']);


route::get('/view_room', [HomeController::class,'view_room'])-> middleware(['auth','admin']);


route::get('/room_delete/{id}', [HomeController::class,'room_delete'])-> middleware(['auth','admin']);


route::get('/room_update/{id}', [HomeController::class,'room_update'])-> middleware(['auth','admin']);


route::post('/edit_room/{id}', [HomeController::class,'edit_room'])-> middleware(['auth','admin']);


route::get('/room_details/{id}', [HomeController::class,'room_details']);


route::post('/add_booking/{id}', [HomeController::class,'add_booking'])-> middleware(['auth','verified']);


route::get('/bookings', [AdminController::class,'bookings'])-> middleware(['auth','admin']);


route::get('/delete_booking/{id}', [AdminController::class,'delete_booking'])-> middleware(['auth','admin']);


route::get('/approve_book/{id}', [AdminController::class,'approve_book'])-> middleware(['auth','admin']);


route::get('/reject_book/{id}', [AdminController::class,'reject_book'])-> middleware(['auth','admin']);

route::get('/view_gallery', [AdminController::class,'view_gallery'])-> middleware(['auth','admin']);


route::post('/upload_gallery', [AdminController::class,'upload_gallery'])-> middleware(['auth','admin']);


route::get('/delete_gallery/{id}', [AdminController::class,'delete_gallery'])-> middleware(['auth','admin']);


route::post('/contacts', [HomeController::class,'contacts']);


route::get('/all_messages', [AdminController::class,'all_messages'])-> middleware(['auth','admin']);


route::get('/send_mail/{id}', [AdminController::class,'send_mail'])-> middleware(['auth','admin']);


route::post('/mail/{id}', [AdminController::class,'mail']) -> middleware(['auth','admin']);


Route::get('/our_rooms', [HomeController::class,'our_rooms']);


route::get('/hotel_gallery', [HomeController::class,'hotel_gallery']);


route::get('/contact_us', [HomeController::class,'contact_us']);


route::get('/about_us', [HomeController::class,'about_us']);


route::get('/homes', [HomeController::class,'homes']);


route::get('/services', [HomeController::class,'services']);


route::get('/admin_home', [AdminController::class,'admin_home']);


Route::get('/my_bookings', [HomeController::class, 'my_bookings'])
    ->middleware(['auth'])
    ->name('home.bookings');



Route::controller(PaymentController::class)->group(function(){
    Route::get('/pay/{id}', 'pay');
});









