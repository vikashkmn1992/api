<?php

Route::get('',function()
{
   return view('welcome');           
});
Route::apiResource('product','ProductController');
Route::group(['prefix'=>'products'],function()
{
	route::apiResource('/{products}/reviews','ReviewController');
});