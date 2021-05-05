# Laravel 8 使用 FFmpeg 執行影片或音訊轉檔

引入 pbmedia 的 laravel-ffmpeg 套件來擴增使用 FFmpeg 執行影片或音訊轉檔，FFmpeg 是影片處理最常用的開源軟體，它功能強大，用途廣泛，大量用於影片網站和商業軟體（比如 Youtube 和 iTunes），也是許多音訊和影片格式的標準編碼／解碼實現。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/ffmpeg/watermark/` 來進行影片加上浮水印轉檔。

----

## 畫面截圖
![](https://i.imgur.com/M5vNlo6.png)
> 如果精彩的影片內容被盜用就會十分苦惱，如果能加上自己獨一無二的浮水印不僅能將個人品牌傳播，還能減少被盜用的風險