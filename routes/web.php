<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/ola/{nome}', function($nome){
    echo "Olá! Seja bem vindon " . $nome . "!";
});


//Expressores regulares na rota para só funcionar em um range de letras e números
Route::get('/rotacomregras/{nome}/{n}', function($nome, $n){
    for($i = 0; $i <$n; $i ++)
        echo "Olá! Seja bem vindo, $nome !<br>";
})->where('nome', '[A-Za-z]+')->where ('n', '[0-9]+');



//Agrupamento de rotas
Route::prefix('/app')->group(function() {
    Route::get('/', function(){
        return view('app');
    })->name('app');

    Route::get('/user', function(){
        return view("user");
    })->name('app.user');

    Route::get('/profile', function(){
        return view('profile');
    })->name('app.profile');
});


Route::get('/produtos', function () {
    echo "<h1> Produtos </h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
    echo "<li>Mouse</li>";
    echo "</ol>";
})->name('meusprodutos');

//Forçando o redirecionamento para uma rota especifica, forma 1 
Route::redirect('todosprodutos', 'produtos', 301);

//Forçando o redirecionamento para uma rota especifica, forma 2
Route::get('todosprodutos2', function() {
    return redirect()->route('meusprodutos');

});


////////////////////////////////////////
Route::post('/requisicoes', function(Request $request) {
    return 'Hello POST';
});