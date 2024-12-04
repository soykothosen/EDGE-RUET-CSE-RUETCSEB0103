<?php
// Get the requested URL (excluding the query string)
$request = $_SERVER['REQUEST_URI'];


// Match the URL pattern and route accordingly
switch ($request) {
    case '/Project01/home':
        // Serve the homepage (index page)
        include 'page1.php';
        break;
    
    // case '/Project01/page1':
    //     // Serve the homepage (index page)
    //     include 'page1.php';
    //     break;

    case '/Project01/page2':
        // Serve the second page
        include 'page2.php';
        break;

    default:
        // Serve a 404 page or a message
        echo "404 - Page not found!";
        break;
}
// ?>
