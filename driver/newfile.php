<?php
spl_autoload_register(function ($className){
    require_once $className.'.class.php';
});
$p=new people('��');
$car=new bmw('����');
$car1=new xiali('����');
$p->drive($car);
echo $p::title;