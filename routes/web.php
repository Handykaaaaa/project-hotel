<?php

use App\Http\Controllers\Admin\AdminRoomController;
use App\Http\Controllers\Admin\TypeRoomController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminReservationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserRoomController;
use App\Http\Controllers\User\UserRoomDetailController;
use App\Http\Controllers\User\UserBookingController;
use App\Http\Controllers\User\UserCartController;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');
route::get('post',[HomeController::class,'post'])->middleware(['auth','admin']);

//route buat rooms
Route::get('/rooms', [UserRoomController::class, 'index'])->name('rooms');
Route::get('/rooms/{room}', 'UserRoomController@show')->name('rooms.show');



//route buat detail room
Route::get('/roomdetail', [UserRoomDetailController::class,'index'])->name('detail');
Route::get('/detail/{id}', 'UserRoomDetailController@detail')->name('room.detail');



//route buat booking
Route::get('/booking', [UserBookingController::class,'index'])->name('booking');
Route::get('user/booking/index', [UserBookingController::class, 'index'])->name('user.booking.index');

//route buat cart/keranjang
Route::get('/keranjang', [UserCartController::class,'index'])->name('cart');



//---------------------------------------------------------------------
Route::get('/adminroom', [AdminRoomController::class, 'index'])->name('adminroom.index');
Route::get('/adminroom/create', [AdminRoomController::class, 'create'])->name('adminroom.create');
Route::post('/admin/room', [AdminRoomController::class, 'store'])->name('adminroom.store');
Route::get('/admin/room/{id}/gallery', [AdminRoomController::class, 'gallery'])->name('adminroom.gallery');
Route::post('/admin/room', [AdminRoomController::class, 'store'])->name('adminroom.store');
Route::get('/admin/room/edit', [AdminRoomController::class, 'edit'])->name('adminroom.edit');
Route::patch('/admin/room/', [AdminRoomController::class, 'update'])->name('adminroom.update'); 
Route::get('/admin/room/', [AdminRoomController::class,'show'])->name('adminroom.show');

// Route::get('/adminroom/create', 'AdminRoomController@create')->name('adminroom.create');
// Route::post('/adminroom/store', 'AdminRoomController@store')->name('adminroom.store');
// Route::get('/adminroom', 'AdminRoomController@index')->name('adminroom.index');

//ADMIN NEW
route::post('/store', [TypeRoomController::class, 'store']);
route::get('/show_room', [TypeRoomController::class, 'show_room']);
route::get('/delete_room/{id}', [TypeRoomController::class, 'destroy']);
route::get('/update_room/{id}', [TypeRoomController::class, 'edit']);
route::post('/edit/{id}', [TypeRoomController::class, 'update']);

route::get('/show_user', [AdminUserController::class, 'show_user']);
route::get('/update_user/{id}', [AdminUserController::class, 'edit']);
route::post('/edit_user/{id}', [AdminUserController::class, 'update']);
route::post('/store_user', [AdminUserController::class, 'store']);
route::get('/delete_user/{id}', [AdminUserController::class, 'destroy']);

route::get('/reservation', [AdminReservationController::class, 'index']);





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
