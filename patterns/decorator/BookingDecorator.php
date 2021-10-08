<?php

namespace Patterns\decorator;

abstract class BookingDecorator implements booking{
    protected booking $booking;

    function __construct(booking $booking)
    {
        $this->booking = $booking;
    }

    abstract function calculatePrice();
    
    abstract function getDescription();
    

}