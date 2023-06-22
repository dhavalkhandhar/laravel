<?php
use Illuminate\Http\Request;
use App\Http\Controllers\FormController;

Route::get('/form', [FormController::class, 'createForm']);
Route::post('/form', [FormController::class, 'submitForm']);
?>