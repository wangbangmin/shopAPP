<?php
require_once 'China.class.php';
class xuesheng extends China
{
    function eat(){
        parent::eat();
        echo '儿子在吃饭';
        
    }
    function play(){
        parent::play();
        echo '儿子在耍';
    }
}
$xue=new xuesheng();
$xue->play();
?>