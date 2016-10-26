<?php

Route::get('get-updates',   'TelegramController@getUpdates');
Route::get('send-message',  'TelegramController@getSendMessage');
Route::post('send-message', 'TelegramController@postSendMessage');
