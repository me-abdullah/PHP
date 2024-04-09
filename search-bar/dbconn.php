<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "searchbar";

$conn = new mysqli ($servername, $username, $password, $db);
if ($conn->connect_error){
 die("Connection Failed " . $conn->connect_error);
}

$insert = "INSERT INTO searchbarr (id, user_name) VALUES (7,'zanjeer')";


if ($conn->query($insert) === TRUE) {
    echo "<h1>New Record Created Successfully</h1>";
}

else {
    echo "Error" . $insert . "<br>" . $conn->error;
}
$conn ->close();
?>