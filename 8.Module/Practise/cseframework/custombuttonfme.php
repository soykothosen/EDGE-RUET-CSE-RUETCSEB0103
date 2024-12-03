<?php

include "cseframework.php";

class myCustomButton extends csButton{
    
    public $shadow;

    public function __construct($color, $shape, $shadow){
        $this->shadow = $shadow;
        $this->color = $color;
        $this->shape = $shape;
    }


}

?>