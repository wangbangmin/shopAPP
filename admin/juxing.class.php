<?php
require_once 'Person.class.php';
class juxing extends Person
{
    var $xingzhuang;
    var $chang;
    var $kuan;
    function __construct($chang,$kuan,$xin="╬ьпн"){
        $this->chang=$chang;
        $this->kuan=$kuan;
        $this->xingzhuang = $xin;
    }
    function zhouchang(){
        return  ($this->chang+$this->kuan)*2;
    }
    function mianji(){
        return  ($this->chang)*($this->kuan);
    }
}

?>