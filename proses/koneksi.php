<?php
$SERVER="localhost";
$username="root";
$password="";
$database="DB_RUPTL";

$conn=mysqli_connect($SERVER,$username,$password);
mysqli_select_db($conn,$database);

?>