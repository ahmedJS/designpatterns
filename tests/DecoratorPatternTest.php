<?php

use Patterns\decorator\Afternoon;
use Patterns\decorator\DoubleRoomBooking;
use Patterns\decorator\Wifi;
use PhpParser\Node\Expr\Cast\Double;

class DecoratorPatternTest extends \PHPUnit\Framework\TestCase{
    function testGetPremiumPrice(){
        $booking = new Wifi(new Afternoon(new DoubleRoomBooking));

        $price = $booking->calculatePrice();

        $this->assertEquals(55,$price);
    }
}