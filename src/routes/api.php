<?php

use Sakac\Inspire\Controllers\InspirationController;

Route::group(['middleware' => ['auth:sanctum']], static function () {
    # USER ROUTES
    Route::prefix('inspire')->name('inspire.')->group(static function () {
        Route::prefix('api/v1')
            ->name('api.v1.')
            ->get('', InspirationController::class)->name('single');
    });
});
