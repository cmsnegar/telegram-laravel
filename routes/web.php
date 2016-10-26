<?php

Route::get('/', 'TelegramController@getHome');
Route::get('get-updates',   'TelegramController@getUpdates');
Route::get('send',  'TelegramController@getSendMessage');
Route::post('send', 'TelegramController@postSendMessage');
