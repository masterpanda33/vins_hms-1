<?php

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
*/

Route::get('tournament/report/reportExport','\Laraspace\Api\Controllers\TournamentController@generateReport');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.request');
    Route::get('mlogin','Auth\ResetPasswordController@userMlogin');

   /* Route::post('password/email', '\Laraspace\Http\Controllers\Auth\ForgotPasswordController@resetlink' ); */
   
    Route::get('user/setpassword/{key}','\Laraspace\Api\Controllers\UserController@setPassword');

// Route::get('setpassword/{sstoken}', '\Laraspace\Api\Controllers\UserController@setPassword');
Route::get('pdf/footer', 'PDFController@getFooter')->name('pdf.footer');

Route::get('/{vue?}', function () {
    return view('app');

})->where('vue', '[\/\w\.-]*')->name('home');

Route::post('/passwordactivate', [
    'as' => 'password', 'uses' => '\Laraspace\Api\Controllers\UserController@passwordActivate'
]);
