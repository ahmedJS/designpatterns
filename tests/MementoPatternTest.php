<?php

use Patterns\memento\CareTaker;
use Patterns\memento\Originator;

class MementoPatternTest extends \PHPUnit\Framework\TestCase {
    function testUndoOperation(){
        $careTaker = new CareTaker(new Originator("first state have"));

        $careTaker->do_operation("operation 1");
        $careTaker->do_operation("operation 2");
        $careTaker->do_operation("operation 3");

        $careTaker->undo();

        $this->assertSame("operation 2",$careTaker->getState());
        
    }
}