<?php

Route::get('newhome', function(){
    echo "pnkj";
});
Route::get('/', [Webspero\Changepage\HomePageController::class, 'index']);