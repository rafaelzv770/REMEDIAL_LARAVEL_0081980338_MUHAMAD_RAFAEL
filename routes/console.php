<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('rage-bait', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an rage baiting quote');
