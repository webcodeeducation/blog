<?php

/*Route::get('/{any}', function () {
  return view('post');
})->where('any', '.*');*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});
