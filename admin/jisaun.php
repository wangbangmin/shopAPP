<?php
spl_autoload_register(function($className){
    require_once $className.'.class.php';
});
$ju=new juxing(8, 5);
// echo $ju->zhouchang();
$ju->jiesha();
// $ju->mianji();
// $yuan=new yuan(10);
// $yu=new Person('Բ');
// $yuan->zhouchang();
// $yuan->mianji();
// $yuan->jiesha();