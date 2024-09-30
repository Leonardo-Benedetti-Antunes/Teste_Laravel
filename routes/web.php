<?php

use Illuminate\Support\Facades\Route;
use App\Models\Turma;

Route::get('/', function () {
    return view('home');
});

Route::get('/turmas', function (){
    return view('turmas', [
        "turmas" => Turma::all()]);
});

Route::get('/turmas/{id}', function ($id){

    $turmas = Turma::find($id);

    return view('turma', ['turmas' => $turmas]);
});


Route::get('/contact', function () {
    return view('contact');
});