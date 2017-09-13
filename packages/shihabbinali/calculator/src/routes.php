<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Shihabbinali\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Shihabbinali\Calculator\CalculatorController@subtract');