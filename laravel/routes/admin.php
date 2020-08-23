<?php
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

## CURRENCY
Route::post('currency/list', 'Admin\CurrencyController@listData');
Route::resource('currency', 'Admin\CurrencyController');

## MATERIAL
Route::post('material/list', 'Admin\MaterialController@listData');
Route::resource('material', 'Admin\MaterialController');


## CALCULATOR/PROJECT
Route::post('calculator/list', 'Admin\CalculatorController@listData');
Route::resource('calculator', 'Admin\CalculatorController');