<?php

Route::get('/trang-chu', [
            'as' => 'trang_chu',
            'uses' => 'Front\Controllers\FrontController@index'
        ]);
Route::get('/gioi-thieu', [
            'as' => 'gioi_thieu',
            'uses' => 'Front\Controllers\FrontController@gioithieu'
        ]);
Route::get('/gioi-thieu/{id}', [
            'as' => 'gioi_thieu',
            'uses' => 'Front\Controllers\FrontController@gioithieu_id'
        ]);
Route::get('/tin-tuc', [
            'as' => 'tin_tuc',
            'uses' => 'Front\Controllers\FrontController@tintuc'
        ]);
Route::get('/tin-tuc/{id}', [
            'as' => 'tin_tuc',
            'uses' => 'Front\Controllers\FrontController@tintuc_id'
        ]);
Route::get('/viec-lam', [
            'as' => 'viec_lam',
            'uses' => 'Front\Controllers\FrontController@vieclam'
        ]);
Route::get('/viec-lam/{id}', [
            'as' => 'viec_lam',
            'uses' => 'Front\Controllers\FrontController@vieclam_id'
        ]);
Route::get('/cong-ty', [
            'as' => 'cong_ty',
            'uses' => 'Front\Controllers\FrontController@congty'
        ]);
Route::get('/cong-ty/{id}', [
            'as' => 'cong_ty',
            'uses' => 'Front\Controllers\FrontController@congty_id'
        ]);
Route::get('/dang-tuyen', [
            'as' => 'dang_tuyen',
            'uses' => 'Front\Controllers\FrontController@dangtuyen'
        ]);
Route::get('/dang-tuyen/{id}', [
            'as' => 'dang_tuyen',
            'uses' => 'Front\Controllers\FrontController@dangtuyen_id'
        ]);
