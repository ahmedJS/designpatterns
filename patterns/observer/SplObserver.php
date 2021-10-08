<?php
namespace Patterns\observer;


use Patterns\observer\interfaces\IObserverStuff;
use Patterns\observer\interfaces\ISplObserver;

class SplObserver implements ISplObserver{
    private $closure;
    private $name;
    function __construct(\Closure $closure , $name)
    {
        $this->name = $name;
        $this->closure = $closure->bindTo($this,$this);
    }
    
    function update(IObserverStuff $iObserverStuff)
    {
        $closure = $this->closure;
        $closure($iObserverStuff);
    }
    

}