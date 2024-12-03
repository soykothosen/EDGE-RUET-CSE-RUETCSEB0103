<?php 
include "cseframework.php";
include "custombuttonfme.php";



$button1 = new csButton("Blue","Squre");

echo "$button1->color";

$link = new Link("Green");

$custombutton = new myCustomButton("Green","Circle", "3 px");

echo "$custombutton->shadow";




?>