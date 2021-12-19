<?php

use Patterns\decorator\Afternoon;
use Patterns\decorator\DoubleRoomBooking;
use Patterns\decorator\Wifi;

class DecoratorPatternTest extends \PHPUnit\Framework\TestCase{
    function testGetPremiumPrice(){
        $booking = new Wifi(new Afternoon(new DoubleRoomBooking));

        $price = $booking->calculatePrice();

        $this->assertEquals(55,$price);
    }
}