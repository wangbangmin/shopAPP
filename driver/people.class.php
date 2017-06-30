<?php
interface guize{
    const title='生活规则';
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
        echo '走了';
    }
    function sleep(){
        echo '睡了';
        
    }
}

?>