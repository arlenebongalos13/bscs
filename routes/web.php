<?php
 
use Illuminate\Support\Facades\Route;
use App\livewire\Auth\Login;
use App\livewire\Auth\Register;

 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(Login::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(Register::class)->prefix('baranggays')->group(function () {
        Route::get('', 'index')->name('baranggay');
        Route::get('create', 'create')->name('baranggay.create');
        Route::post('store', 'store')->name('baranggay.store');
        Route::get('show/{id}', 'show')->name('baranggay.show');
        Route::get('edit/{id}', 'edit')->name('baranggay.edit');
        Route::put('edit/{id}', 'update')->name('baranggay.update');
        Route::delete('destroy/{id}', 'destroy')->name('baranggay.destroy');
    });
 
    Route::get('/profile', [App\livewire\Auth\Login::class, 'profile'])->name('profile');
});
