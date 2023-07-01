<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ShortUrlController;

Route::apiResource('shortUrl', ShortUrlController::class);
