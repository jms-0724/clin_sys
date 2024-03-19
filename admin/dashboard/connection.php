<?php

$mysqli = new mysqli("localhost","root","","db_clinic");
if ($mysqli -> connect_errno) {
   echo "Failed to Connect";
   exit();
} 

?>