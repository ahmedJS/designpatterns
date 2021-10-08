<?php
namespace Patterns\observer;

use Patterns\observer\interfaces\IObserverStuff;
use Patterns\observer\interfaces\ISplObserver;

class ObserverStuff implements IObserverStuff{
    
    private array $observers = [];
    private $property;


    function getProperty()
    {
        return $this->property;
    }
    

    function attach(ISplObserver $ISplObserver) : IObserverStuff
    {
        $this->observers[] = $ISplObserver;
        return $this;
    }
    
    function notify()
    {
        foreach($this->observers as $observer){
            $observer->update($this);
        }
    }
    
    function setProperty($property)
    {
        $this->property = $property;
        $this->notify();
    }
    

}