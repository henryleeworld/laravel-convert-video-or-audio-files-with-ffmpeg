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
        ->open('gundam-zz-opening-001.mp4')
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
        ->save('gundam-zz-opening-001-with-watermark.wmv');
        echo '影片加上浮水印' . PHP_EOL;
    }
}
