<?php
// Get the current request URI
$request = $_SERVER['REQUEST_URI'];

$request = str_replace('/EDGE-RUET-CSE-RUETCSEB0103/EDGE-RUET-CSE-RUETCSEB0103/10.Module/ClassPractise/Project', '', $request);


switch ($request) {
    case '/home':
        echo "Welcome to the Home page!";
        break;
    case '/about':
        echo "Welcome to the About page!";
        break;
    case '/':
        echo "Welcome to the Default Home page!";
        break;
    case "/page1":
        include "page1.php";
        break;
        
    case "/page2":
        include "page2.php";
    break;

    default:
    echo "Page not found!";
    break; 

    }



?>