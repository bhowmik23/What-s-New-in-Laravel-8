<?php
use Illuminate\Support\Facades\Event;
use App\Events\GiftCirtificatePurchased;

Event::listen(function (GiftCirtificatePurchased $event) {
    dd($event);
});