<?php 

class defaultButton{
    #public $color;
    private $color;
    public $shape;

    public function __construct($color, $shape){
        $this->color = $color;
        $this->shape = $shape;
    }

    public function setColor($color){ // setter
        #check Authentic
        $this->color = $color;
    }

    public function getColor(){ //getter
        #authentic
        return $this->color;
    }

   

}

$button1 = new defaultButton("Green", "square");
#echo "$button1->color";
echo "<br>";
echo "$button1->shape";

/*
$button1->color = "Red";
echo "<br>";
echo "$button1->color";
*/
$button1->setColor("red");
echo "<br>";
$var1 = $button1->getColor();
echo "$var1";


?>

