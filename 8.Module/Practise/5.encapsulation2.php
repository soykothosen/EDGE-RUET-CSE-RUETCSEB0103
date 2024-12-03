<?php

class ruetcse{

    public $description;
    private $studentnumber;
    protected $headname;

    function __construct($description,$studentnumber,$headname){
        $this->description = $description;
        $this->studentnumber = $studentnumber;
        $this->headname = $headname;
    }


}

$information = new ruetcse("CES Department","345","ABC");

#echo "$information->headname";

class ChildruetCSE extends ruetcse{

    function __construct($description,$studentnumber,$headname){

    }
     public function gethedname(){
        echo "$this->headname";
        
     }
}

$information1 = new ChildruetCSE("CSE Dept.","567","ABC");

#$text = $information1->gethedname();
#echo "$text";
echo $information1->gethedname();

?>