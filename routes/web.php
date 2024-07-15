<?php
use Illuminate\Support\Facades\Route;
//importamos el controlador, para vincular la ruta con el controlador
use App\Http\Controllers\InicioController;

//el método get sirve para pintar las vistas que estamos haciendo y las conecta al controlador
//Route::get('/',[InicioController::class,'index'])->name('inicio.index');

//el método view sivre para ver las vistas estáticas, es decir, que no tienen funcionalidad

Route::view('/','inicio')->name('inicio'); //vista que gobierna
Route::view('/somos','somos')->name('somos');
Route::view('/iniciarSesion','iniciarSesion')->name('iniciarSesion');
Route::view('/registroEsteticista','registroEsteticista')->name('registroEsteticista');
Route::view('/registroUsuario','registroUsuario')->name('registroUsuario');

Route::view('/reservasEsteticista','reservasEsteticista')->name('reservasEsteticista');
Route::view('/reservarUsuario','reservarUsuario')->name('reservarUsuario');
