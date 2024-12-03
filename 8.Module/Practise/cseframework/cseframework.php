<?php

class csButton{
    public $color;
    public $shape;

    public function __construct($color, $shape){
        $this->color = $color;
        $this->shape = $shape;
    }

    function onClick(){
        echo "Button Click";
    }
}

class csLink{
    public $textColor;

    public function __construct($textColor){
        $this->textColor = $textColor;
    }

    function onClick(){

        echo "Link Click";

    }
    
}

class csImage{
    public $imageSize;

    public function __construct($imageSize){
        $this->imageSize = $imageSize;
    }

    function onClick(){

        echo "Image Clicked";

    }
}

?>