<?php

Route::group(['middleware' => ['web']], function () {
    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {
        
        Route::get('/admin/sites',[
            'as' => 'admin_sites',
            'uses' => 'Admin\Controllers\AdminController@index'
        ]);
        Route::get('/admin/categories',[
            'as' => 'admin_categories',
            'uses' => 'Admin\Controllers\AdminController@categories'
        ]);
        Route::get('/admin/sites-categories',[
            'as' => 'admin_sites_categories',
            'uses' => 'Admin\Controllers\AdminController@sites_categories'
        ]);
        Route::get('/admin/companies',[
            'as' => 'admin_companies',
            'uses' => 'Admin\Controllers\AdminController@companies'
        ]);
        Route::get('/admin/jobs',[
            'as' => 'admin_jobs',
            'uses' => 'Admin\Controllers\AdminController@jobs'
        ]);
    });
});