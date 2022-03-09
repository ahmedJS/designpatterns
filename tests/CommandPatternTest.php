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

    }

    function testUndoCommand(){

    }

    
}