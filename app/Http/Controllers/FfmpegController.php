<?php

namespace App\Http\Controllers;

use FFMpeg\Format\Video\WMV;
use ProtoneMedia\LaravelFFMpeg\Filters\WatermarkFactory;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class FFMpegController extends Controller
{
    public function addWatermark() 
    {
        FFMpeg::fromDisk('video')
        ->open('gundam-seed-series-the-sword-of-hope-with-meteor.mp4')
        ->addWatermark(function(WatermarkFactory $watermark) {
            $watermark->fromDisk('images')
                ->open('kamen-rider-black-icon.jpg')
                ->right(25)
                ->bottom(25)
                ->width(20)
                ->height(20);
        })
        ->export()
        ->toDisk('converted_video')
        ->inFormat(new WMV)
        ->save('gundam-seed-series-the-sword-of-hope-with-meteor-with-watermark.wmv');
        echo __('Add watermark to video') . PHP_EOL;
    }
}
