<?php

Route::get("/gudangs",'GudangController@index');
Route::post("/barang",'BarangController@store');
Route::get("/barang/get/{id}",'BarangController@index');
Route::post("/barang/{id}/update",'BarangController@update');