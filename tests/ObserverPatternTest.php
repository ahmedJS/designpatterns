<?php

use Patterns\observer\ObserverStuff;
use Patterns\observer\SplObserver;

require __DIR__."/../vendor/autoload.php";

class ObserverPatternTest extends \PHPUnit\Framework\TestCase{
    function testObserverDesignPattern(){
        $subject = new ObserverStuff;

        $closurelogic  = function($subject){
            echo $this->name. " is notified about the property ".$subject->getProperty() . "\n";
        };

        $subject->attach(new SplObserver($closurelogic,"ahmed"))
                ->attach(new SplObserver($closurelogic,"ali"))
                ->attach(new SplObserver($closurelogic,"sadiq"))
                ->attach(new SplObserver($closurelogic,"Hussein"));
        
        $subject->setProperty("hello world");

    }
}