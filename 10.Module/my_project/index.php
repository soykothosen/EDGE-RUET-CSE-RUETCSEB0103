<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "edgemediseba";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{
  #echo "Connected successfully <br>";

}


// Get the current request URI
$request = $_SERVER['REQUEST_URI'];

// Remove the project folder name from the URI (if applicable)
#$request = str_replace('/my_project', '', $request);
$request = str_replace('/EDGE-RUET-CSE-RUETCSEB0103/EDGE-RUET-CSE-RUETCSEB0103/10.Module/my_project', '', $request);

// Match the requested path
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
        include"page1.php";
        break;

    case "/page2":
        include "page2.php";
    break;


    case "/userdata":

        header('Content-Type: application/json');

        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);

        $output = $result->fetch_all(MYSQLI_ASSOC);

        $finaloutput = json_encode($output);

        echo $finaloutput;

        
    break;

    case "/registration":
        include "views/registration.php";
        break;
    case "/creatuser":

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form data
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $address = $_POST['address'];
    
        // Display or save data (For demonstration, we're just echoing)
        // 
        
        include "views/profile.php";
    }
    break;


        
    default:
        echo "Page not found!";
        break;
}
?>
