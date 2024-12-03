<?php

class newButton{
    public $color;

    public function __construct($color){
        $this->color = $color;
    }

    function Click(){
        echo "Button Clicked";
    }

}

$button = new newButton("Green");

echo $button->Click();
echo "$button->color";


class Link{
    public $color;

    public function __construct($color){
        $this->color = $color;
    }

    function Click(){
        echo "Link Clicked";
    }

}

$link = new Link("Blue");
echo $link->Click();
echo "$link->color";

?>