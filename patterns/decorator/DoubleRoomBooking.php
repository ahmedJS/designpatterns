<?php

use PhpParser\Builder\Namespace_;

namespace Patterns\decorator;

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