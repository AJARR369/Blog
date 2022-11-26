<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;


Route::get('/', HomeController::class);

Route::controller(ProductoController::class)->group(function(){
    Route::get('productos','index');
    Route::get('productos/create', 'create');
    Route::get('productos/{producto}', 'show');
});





/*Route::get('productos/{producto}/{categoria?}',function($producto,$categoria=null){
    if($categoria){
        return "Bienvenido a los productos $producto, de la categoria $categoria";
    }else{
        return "Bienvenido a los productos $producto";
        
    }
    
}); */