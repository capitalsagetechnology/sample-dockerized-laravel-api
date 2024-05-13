<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Use App\Models\Article;

Route::get('articles', 'PostController@index');

Route::get('articles/{article}', 'PostController@show');

Route::post('articles', 'PostController@store');

Route::put('articles/{article}', 'PostController@update');

Route::delete('articles/{article}', 'PostController@delete');



