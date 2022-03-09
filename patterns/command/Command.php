<?php
namespace Patterns\command;
use Patterns\command\ICommand;
use phpDocumentor\Reflection\Types\Integer;

class Command implements ICommand{
    private $state;
    function __construct(Int $state){
        $this->state = $state;
    }
    function excecute(){
        return $this->state = $this->state + 1;
    }
    function undo(){
        return $this->state = $this->state - 1;
    }
}