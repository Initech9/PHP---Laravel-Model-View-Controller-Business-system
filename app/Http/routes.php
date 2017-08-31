<?php

Route::get('/', function () {
    return redirect('buy');
});

Route::resource('buy', 'ProductController', ['only' => ['index', 'show']]);

Route::resource('bartender', 'BartenderController');
Route::delete('emptyCart', 'CartController@emptyCart');
