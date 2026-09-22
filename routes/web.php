<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/servicios/asesoria-corporativa', 'layouts.detalle_servicios.Asesoria Corporativa')->name('servicios.asesoria-corporativa');
Route::view('/servicios/litigios-cobranza-arbitraje', 'layouts.detalle_servicios.Litigios, Cobranza y Arbitraje')->name('servicios.litigios-cobranza-arbitraje');
Route::view('/servicios/asesoria-laboral', 'layouts.detalle_servicios.Asesoria Laboral')->name('servicios.asesoria-laboral');
Route::view('/servicios/regulacion-derecho-publico', 'layouts.detalle_servicios.Regulacion y Derecho Publico')->name('servicios.regulacion-derecho-publico');
Route::view('/clientes', 'clientes')->name('clientes');
Route::view('/trayectoria', 'trayectoria')->name('trayectoria');
Route::view('/contacto', 'contacto')->name('contacto');
