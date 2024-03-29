<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="welcome.php" method="get">
        <input type="text" name="myname" placeholder="enter your name">
        <input type="email" name="email" placeholder="enter your email address">
        <button type="submit">Send</button>
    </form> -->
    <form action="welcome.php" method="post">
        <input type="text" name="myname" placeholder="enter your name">
        <input type="email" name="email" placeholder="enter your email address">
        <button type="submit">Send</button>
    </form>
</body>
</html>


<?php

# If else statement

// $admin = "Abdullah";
// $password = 12345;

// $admin_02 = "Daniyal";
// $password_02 = 123;

// if($admin == "Abdullah" &&  $password == 12345){
// echo "Login Successful";
// }
// elseif($admin_02 == "Daniyal" && $password_02 == 123){
// echo "Login successful";
// }
// else{
//     echo "Login Failed";
// }

// # Switch Case

// switch ($admin){
//     case "Abdullah";
//     echo "Login Successful";
//     break;
//     case "Daniyal";
//     echo "<script>alert('Login Successful');</script>";
//     break;
//     default:
//     echo "<h1>Login Failed</h1>";
// }

# Ternary Operator

// $age = 18;
// $result = $age >= 18? "Allowed" : "Not Allowed";
// echo $result;

# Loop
// echo "this is for loop";
// echo "this is for loop";
// echo "this is for loop";
// echo "this is for loop";
// echo "this is for loop";


// (condition){
// statement
// }


// # For Loop

// for ($i = 0; $i < 100; $i++){
// echo "this is for loop";
// }


// # While Loop

// $j = 0;
// while($j < 10){
// echo "this is while loop";
// $j++;
// }


# Array

// $values = array("wamiq", "aarib","abdullah","seher","amna");
// echo $values[4] . "<br>";
// echo $values[3];
// $lenght = count($values);
// echo $lenght;
// for ($i=0; $i < $values; $i++) { 
//     echo $i;
// }


# function

// function myfunc(){
//     echo ("This is function");
// }

// myfunc();

// function percent($obt_marks,$tot_marks){
// $result = $obt_marks / $tot_marks * 100 . "<br>";
// echo $result;
// }

// percent(564,850);
// percent(477,1100);

?>