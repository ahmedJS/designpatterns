<?php
namespace Patterns\command;
interface ICommand{
    function excecute();
    function undo();
}