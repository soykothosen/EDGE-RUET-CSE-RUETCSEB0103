<?php 

class defaultButton{
    public $color;
    public $shape;

    public function __construct($color, $shape){
        $this->color = $color;
        $this->shape = $shape;
    }
}

$button1 = new defaultButton("Green", "square");
echo "$button1->color";
echo "<br>";
echo "$button1->shape";



class defaultButtonChild extends defaultButton{

    public $shadow;

    public function __construct($color, $shape, $shadow){
        $this->shadow = $shadow;
        $this->color = $color." Welcome ";
    }
     

}

$button3 = new defaultButtonChild("Blue","Round","2px");

echo "<br>";
echo "$button3->shadow";
echo "$button3->color";


?>