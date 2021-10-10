<?php
namespace Patterns\decorator;

class Afternoon extends BookingDecorator{

    const PRICE = 15;

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