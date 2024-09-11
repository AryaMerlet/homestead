<?php

use App\Http\Controllers\MotifController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ClasseController;
use Psy\Command\ListCommand\ClassEnumerator;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('cool', function () {
    return "Cool, Laravel !";
});

Route::get('test/profil', function () {
    return "Ceci est un test";
})->name('profil');
//Rennomer les routes pour maintenance et facilité

//TP test de route multiple
Route::get('1',function(){
    return "Je suis sur la page 1";
});


Route::get('2',function(){
    return "Je suis sur la page 2";
});

Route::get('3',function() {
    return "Je suis sur la page 3";
});

//Route en utilisant des variables
Route::get('{a}/{b}', function ($a,$b){
    Return "le résultat de $a x $b est ".$a * $b;
});

//Même tp mais vec une route unique pour plusieurs pages
Route::get('{a}', function ($a){
    Return "Je suis sur la page $a";
});

//Avec une condition
Route::get('{a}', function ($a){
    Return "Je suis sur la page $a conditionné";
})->where(['a'=>'[0-9]'])->name('p-chiffre');

//Appel d'un controler et sa methode, bonne pratique
Route::get('/',[MotifController::class, 'index'])->name('home');

Route::resource('/',MotifController::class);
