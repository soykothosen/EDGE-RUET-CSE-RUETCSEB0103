<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "module10cse";

// Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else{
    echo "Connected successfully <br>";
  }


  #$sql = "SELECT * FROM `users`";
  #$sql = 'SELECT * FROM `users` WHERE username = "Soykot16" AND password ="123456";';
  $sql = 'SELECT * FROM `users` WHERE username = "Soykot16"';
  $result = $conn->query($sql);
  $finaloutput =  $result->fetch_all(MYSQLI_ASSOC);

  

  if ($result->num_rows > 0) {

    //logic

    if($finaloutput[0]['password'] == '123456') {
        echo "Login Success Fully";
    } else{
        echo "Wrong Password";
    }

  } else {

    echo 'User Not Found';

  }


  echo "<br> Final Output <br><br>";

  print_r($finaloutput);

  echo "<br>";

  print_r($finaloutput[0]["username"]);
  #print_r($finaloutput[1]["username"]);

  echo "<br> <br> Json Output <br><br>";

  $txt = json_encode($finaloutput);

  echo "$txt";


//   $sql1 = "INSERT INTO `users` (`userid`, `username`, `password`, `university`) VALUES (NULL, 'Soykot161', '123456', 'AHC');";
//   $result1 = $conn->query($sql1);

//   if ($result1 === false) {

//   echo "Error executing query: " . $conn->error;  // Print the error message

// } else {

//   echo "Success Insert Query";

// }






?>