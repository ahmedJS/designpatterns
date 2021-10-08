<?php
namespace Patterns\observer\interfaces;

interface IObserverStuff{
    function attach(ISplObserver $ISplObserver) : IObserverStuff;
    function notify();
    function setProperty($property);
    function getProperty();
}