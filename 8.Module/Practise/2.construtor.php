<?php

class newButton{

    public $name;
    public $shape;

    function __construct($name,$shape01) {
        $this->name = $name;
        $this->shape = $shape01;
      }

    function Hello() {
        echo "Hi";
    }

}


$button1 = new newButton("Green Button", "Circular");

echo "$button1->name";
echo "$button1->shape";

$button1->Hello()


?>