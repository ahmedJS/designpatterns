<?php

use Patterns\observer\ObserverStuff;
use Patterns\observer\SplObserver;

require __DIR__."/../vendor/autoload.php";

class ObserverPatternTest extends \PHPUnit\Framework\TestCase{
    function testObserverDesignPattern(){
        ob_start();
        $subject = new ObserverStuff;

        $closurelogic  = function($subject){
            echo $this->name. " is notified about the property ".$subject->getProperty() . "\n";
        };

        $subject->attach(new SplObserver($closurelogic,"ahmed"))
                ->attach(new SplObserver($closurelogic,"ali"));
        
        $subject->setProperty("hello world");
        $actual = ob_get_clean();
        $this->assertSame("ahmed is notified about the property hello world\nali is notified about the property hello world\n"
        ,$actual);

    }
}