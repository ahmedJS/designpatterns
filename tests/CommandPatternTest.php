<?php

use Patterns\command\Command;
use Patterns\command\Invoker;
use PHPUnit\Framework\TestCase;

class CommandPatternTest extends TestCase {

    function testReturnByReferenceInCommandObj(){

        $invoker = new Invoker(new Command(0));
        $invoker->command[] = "added by reference";
        $this->assertEquals("added by reference",$invoker->command[1]);

    }
    
    function testAddNewCommandAndExcuteIt(){
        $invoker = new Invoker(new Command(1));
        $invoker->do_operation();
        $command = $invoker->command[0]->getState();
        $this->assertEquals($invoker->command[0]->getState(),2);
    }

    function testUndoCommand(){
        $invoker = new Invoker(new Command(1));
        $invoker->do_operation();
        $this->assertEquals($invoker->command[0]->undo(),1);
    }

    
}