<?php
require_once 'cars.class.php';
class bmw extends cars
{
    function __construct($name){
        $this->name=$name;
    }
    function start(){
        echo $this->name.'��������';
    }
    function run(){
        echo $this->name.'������';
    }
    function stop() {                   
        echo $this->name.'ֹͣ��';
    }
}

?>