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
  echo "Connected successfully <br>";

}



$sql = "SELECT * FROM user";
$result = $conn->query($sql);

$output = $result->fetch_all(MYSQLI_ASSOC);

$finaloutput = json_encode($output);


echo " <br> Final Output <br>";
echo "$finaloutput";
echo json_encode($output[0]["username"]);

echo " <br>Output [0] <br>";
print_r($output[0]["username"]);

echo " <br>Output<br>";
print_r($output);


echo " <br> ForLoop <br>";

if ($result->num_rows > 0) {

  for ($i = 0; $i < count($output); $i++) {
    print_r($output[$i]);
     // Access each row by index
    echo "<br>";
}
} else {
    echo "0 results";
}

// $sql1 = "INSERT INTO `divisio` (`divid`, `Divname`) VALUES (NULL, 'Bogu');";
// $result1 = $conn->query($sql1);


// if ($result1 === false) {

//   echo "Error executing query: " . $conn->error;  // Print the error message

// } else {

//   echo "Success Query";

// }

$conn->close();

?>
