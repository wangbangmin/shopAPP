<?php
require_once 'animal.class.php';
class China extends animal
{
   function eat(){
      
   }
    function play(){
        echo '����ˣ';
    }
}
$a=new China();
$a->play();
?>