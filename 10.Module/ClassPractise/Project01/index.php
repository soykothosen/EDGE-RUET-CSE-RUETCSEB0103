<?php

include "dbcon.php";
// Get the current request URI
$request = $_SERVER['REQUEST_URI'];

$request = str_replace('/EDGE-RUET-CSE-RUETCSEB0103/EDGE-RUET-CSE-RUETCSEB0103/10.Module/ClassPractise/Project01', '', $request);


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

    case "/registration":
        include "views/regis.php";
        break;
    
    case "/createuser":
        
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form data
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $address = $_POST['address'];
    
        // Display or save data (For demonstration, we're just echoing)
        // 
        
        #include "views/profile.php";

        #echo "$name";

          $sql1 = "INSERT INTO `users` (`userid`, `username`, `password`, `university`) VALUES (NULL, '$name', '$password', '$address');";
            $result1 = $conn->query($sql1);

            if ($result1 === false) {

            echo "Error executing query: " . $conn->error;  // Print the error message

            } else {

             echo "Registration Successful";

            }



        #include "views/profile.php";
    }

    break;

    case "/alluser":

        header('Content-Type: application/json');

         $sql = "SELECT * FROM `users`";
         $result = $conn->query($sql);
        $finaloutput =  $result->fetch_all(MYSQLI_ASSOC);

        echo json_encode($finaloutput);


        


        break;

    default:
    echo "Page not found!";
    break; 

    }



?>