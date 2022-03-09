<?php
namespace Patterns\memento;

class Memento {
    private String $state;

    function __construct($state)
    {
        $this->state = $state;
    }

    function getState(){
        return $this->state;
    }
}