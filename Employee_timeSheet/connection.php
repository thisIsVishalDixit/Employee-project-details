<?php
$server= "localhost";
$username="root";
$password="";
$database="employee_info";

$con=mysqli_connect($server,$username, $password, $database);
if(!$con){
    echo "Connection Error.";
}



?>