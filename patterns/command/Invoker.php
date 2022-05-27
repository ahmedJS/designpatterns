<?php 
namespace Patterns\command;

use Patterns\command\ICommand;
use Patterns\command\Command;
class Invoker{

    /**
     * @var ICommand[] $_commands
     */
    private $_commands = [];

    private $state;

    function __construct(ICommand $command)
    {
        $this->command = [$command];
    }

    function do_operation () {
        $lastCommand = $this->excecuteCommand(end($this->command));
    }
    // return by reference
    // this is middleware-like around commands proprty filtering it before return it
    // in order to prevent errors

    function &__get($property){
        if($property == "command") {
            if(!isset($this->_commands)){
                return [new Command(0)];
            }else{
                return $this->_commands;
            }
        }
    }

    private function excecuteCommand(ICommand $command){

        // queue the command in commands variable
        $this->command[] = $command;

        //excecute it
        $command->excecute();

    }
    
    function undoOperation(){
        // pick up the last one command and cut it off
        $command = array_pop($this->command);

        //undo Its operation
        $this->state = $command->undo();
    }
}