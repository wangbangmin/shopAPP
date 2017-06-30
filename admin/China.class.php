<?php
require_once 'animal.class.php';
class China extends animal
{
   function eat(){
      
   }
    function play(){
        echo 'ÎÒÔÚË£';
    }
}
$a=new China();
$a->play();
?>