<?php
namespace Patterns\decorator;

class Wifi extends BookingDecorator{
    const PRICE = 10;

    function __construct($booking)
    {
        parent::__construct($booking);
    }

    function calculatePrice()
    {
       return $this->booking->calculatePrice() + self::PRICE;    
    }
    
    function getDescription()
    {
        
    }
    

}