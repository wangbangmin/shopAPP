<?php
require_once 'cars.class.php';
class xiali extends cars
{
    function __construct($name){
        $this->name=$name;
    }
    function start(){
        echo $this->name.'��������';
    }
    function run(){
        echo $this->run.'������';
    }
    function stop() {
        echo $this->stop.'ֹͣ��';
    }
}

?>