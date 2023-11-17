<?php

use Sakac\Inspire\Controllers\InspirationController;

Route::group(['middleware' => ['auth:sanctum']], static function () {
    # USER ROUTES
    Route::prefix('users')->name('users.')->group(static function () {
        Route::get('inspire', InspirationController::class)->name('single');
    });
});
