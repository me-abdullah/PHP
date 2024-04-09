<?php

$con = MySQLi_connect(
   "localhost", 
   "root", 
   "", 
   "searchbar" 
);

if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>