<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$_SESSION["favfriend"] = "aarib";
$_SESSION["favfood"] = "bruger";
$_SESSION["favdrink"] = "pakola";
echo "Favorite food is " . $_SESSION["favfood"] . "<br>" ;
echo "Session variables are set. <br>";
print_r($_SESSION);
?>

</body>
</html>