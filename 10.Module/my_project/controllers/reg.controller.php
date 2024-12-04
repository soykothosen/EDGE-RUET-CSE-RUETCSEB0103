<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    // Display or save data (For demonstration, we're just echoing)
    echo "Name: $name<br>";
    echo "Mobile: $mobile<br>";
    echo "Password: $password<br>";
    echo "Address: $address<br>";
}
?>
