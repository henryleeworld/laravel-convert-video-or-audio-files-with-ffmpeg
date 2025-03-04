<?php

use App\Http\Controllers\FFMpegController;
use Illuminate\Support\Facades\Route;

Route::get('ffmpeg/watermark/', [FFMpegController::class, 'addWatermark']);
