<?php
namespace Patterns\memento;
use Patterns\memento\Memento as Memento;

class Originator{
    private $state;

    function __construct($state)
    {
        $this->state = $state;
    }

    function setState($state){
        $this->state = $state;
    }


    function getState(){
        return $this->state;
    }

    function createMemento (): Memento {
        return new Memento($this->state);
    } 

    function restore(Memento $memento) {
        $this->state = $memento->getState();
    }
}

