<?php

namespace Patterns\memento;
use Patterns\memento\Originator;

class CareTaker{
    private Originator $originator;
    private $history = [];

    function __construct($originator)
    {
        $this->originator = $originator;
    }

    function do_operation($operation){
        $this->originator->setState($operation);
        
        // save a snapshot
        array_push($this->history,$this->originator->createMemento());
    }

    function getState(){
        return $this->originator->getState();
    }

    function undo(){
        if(!count($this->history))
        {
            return;
        }

        // delete the last element of array
        $memento = array_pop($this->history);

        // get the last element of the array
        $memento = end($this->history);

        // restore the state of the originator
        $this->originator->restore($memento);
    }

}