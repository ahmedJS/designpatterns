<?php

namespace Patterns\decorator;

use PhpParser\Builder\Namespace_;


class DoubleRoomBooking implements booking {
    const PRICE = 30;

    function calculatePrice()
    {
        return self::PRICE ;
    }
    
    function getDescription()
    {
    }

    
}