<?php
interface guize{
    const title='�������';
    function zoulu();
    function sleep();
    
}
class people implements guize
{
    var $name;
    function __construct($name){
        $this->name=$name;
    }
    function drive($car) {
        $car->start();
        $car->run();
        $car->stop();
    }
    function zoulu(){
        echo '����';
    }
    function sleep(){
        echo '˯��';
        
    }
}

?>