<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "wp_db";

$conn = new mysqli ($servername, $username, $password, $db);
if ($conn->connect_error){
 die("Connection Failed " . $conn->connect_error);
}

$sql = "INSERT INTO students_table (first_name, last_name, class_name, group_name, contact_no) 
VALUES ('wamiq', 'zanjeer','metric','Biology',0218796521)";


if ($conn->query($sql) === TRUE) {
    echo "<h1>New Record Created Successfully</h1>";
}

else {
    echo "Error" . $sql . "<br>" . $conn->error;
}
$conn ->close();
?>