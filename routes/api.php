<?php

Route::group([
        'prefix' => '/v1',
        'namespace' => 'Api\V1',
        'as' => 'api.'
    ], function () {
    Route::resource('companies', 'CompaniesController', ['except' => ['create', 'edit']]);
});

Route::group([
        'prefix' => '/v1',
        'namespace' => 'Api\V1',
        'as' => 'api.'
    ], function () {
    Route::post('log',                          ['as' => 'log',                         'uses' => 'HomeController@log']);
    Route::group([
        'prefix' => '/character',
        'as' => 'character.'
    ], function () {
        Route::get('all',                       ['as' => 'all',                         'uses' => 'HomeController@all']);
        Route::post('create',                   ['as' => 'create',                      'uses' => 'HomeController@store']);
        Route::post('add-header',               ['as' => 'add-header',                  'uses' => 'HomeController@addHeader']);
        Route::post('update',                   ['as' => 'update',                      'uses' => 'HomeController@update']);
        Route::post('delete',                   ['as' => 'delete',                      'uses' => 'HomeController@delete']);
    });
});
