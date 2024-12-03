<?php 

//echo "Hi";

// class
class customButtom{

    //public $name = "Hi";
    public $name;
    #public $color;

    function Hello(){
        echo "Hello";
    }  // Method 

    function set_name($name1) {
        $this->name = $name1;
    }
    
    function get_name() {
        return $this->name;
    }


}

$button1 = new customButtom(); // obj = button1

#$button2 = new customButtom();

echo "$button1->name";
#echo "$button2->name";

$button1->Hello();
echo "<br>";
$button1->get_name();
$button1->set_name("Green Button");
$txt =  $button1->get_name();
echo "$txt";



?>