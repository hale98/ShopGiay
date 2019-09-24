<?php

Route::get('/', function () {
    return view('welcome');

});
Route::group(['prefix'=>'admin'],function(){
    Route::get('/', ['as'=>'admin-index', 'uses'=>'CategoryController@getIndexAdmin']);
    Route::group(['prefix' =>'danh-muc'],function() {
        Route::get("them", ['as'=>'themdanhmuc', 'uses'=>'CategoryController@getAddCate']);
        Route::post("them", ['as'=>'themdanhmuc', 'uses'=>'CategoryController@postAddCate']);
        Route::get("sua/{id}",['as'=>'suadanhmuc','uses'=>'CategoryController@getEditCate']);

        Route::post("sua/{id}",['as'=>'suadanhmuc','uses'=>'CategoryController@postEditCate']);

        Route::get("danh-sach",['as'=>'listdanhmuc','uses'=>'CategoryController@getListCate']);

        Route::get('xoa/{id}',"CategoryController@getDelCate");

    });

});