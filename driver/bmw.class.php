<?php
require_once 'cars.class.php';
class bmw extends cars
{
    function __construct($name){
        $this->name=$name;
    }
    function start(){
        echo $this->name.'被启动了';
    }
    function run(){
        echo $this->name.'开跑了';
    }
    function stop() {                   
        echo $this->name.'停止了';
    }
}

?>