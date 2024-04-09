<?php

include "conn.php";

if (isset($_POST['search'])) {

   $Name = $_POST['search'];

   $Query = "SELECT user_name FROM searchbarr WHERE user_name LIKE '%$Name%' LIMIT 5";

   $ExecQuery = MySQLi_query($con, $Query);

   echo '
<ul>
   ';

   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
 
   <li onclick='fill("<?php echo $Result['$Name']; ?>")'>
   <a>
   
       <?php echo $Result['user_name']; ?>
   </li></a>

   <?php
}}
?>
</ul>