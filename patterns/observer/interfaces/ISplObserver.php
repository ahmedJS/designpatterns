<?php
namespace Patterns\observer\interfaces;

interface ISplObserver{
    function __construct(\Closure $closure , $name);
    function update(IObserverStuff $iObserverStuff);
}