<?php
require_once 'Person.class.php';
class yuan extends Person
{
    var $xingzhuang;
    var $r;
    function __construct($r,$xin="Բ��"){
        $this->r=$r;
        $this->xingzhuang = $xin;
    }
    function zhouchang(){
       return   ($this->r)*M_PI*2;
    }
    function mianji() {
        return  ($this->r)*($this->r)*M_PI;
    }
}

?>