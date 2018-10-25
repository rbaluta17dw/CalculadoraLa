<?php

Route::get('bienvenida','FormularioController@mostrarFormulario');
Route::post('mcalculadora','CalculadoraController@mostrarCalculadora');
Route::post('calculadora','CalculadoraController@calcular');