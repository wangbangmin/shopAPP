<?php
require_once 'cars.class.php';
class xiali extends cars
{
    function __construct($name){
        $this->name=$name;
    }
    function start(){
        echo $this->name.'被启动了';
    }
    function run(){
        echo $this->run.'开跑了';
    }
    function stop() {
        echo $this->stop.'停止了';
    }
}

?>