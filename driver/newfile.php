<?php
spl_autoload_register(function ($className){
    require_once $className.'.class.php';
});
$p=new people('Íõ');
$car=new bmw('±¦Âí');
$car1=new xiali('ÏÄÀû');
$p->drive($car);
echo $p::title;