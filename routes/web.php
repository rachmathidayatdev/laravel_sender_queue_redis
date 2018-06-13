<?php

use Illuminate\Support\Facades\Redis;

//pake redish biasa
Route::get('/send-queue-email', function(){
    Redis::SADD('send_email', json_encode(['email' => 'rachmathidayat.dev@gmail.com', 'created_at' => now()]));
});

Route::get('/list-queue-email', function(){
   $list_queue_email = Redis::SMEMBERS('send_email');
    dd($list_queue_email);
});

Route::get('/remove-queue-email', function(){
   Redis::DEL('send_email');
});
//sampai sini
