<?php
require_once 'China.class.php';
class xuesheng extends China
{
    function eat(){
        parent::eat();
        echo '�����ڳԷ�';
        
    }
    function play(){
        parent::play();
        echo '������ˣ';
    }
}
$xue=new xuesheng();
$xue->play();
?>