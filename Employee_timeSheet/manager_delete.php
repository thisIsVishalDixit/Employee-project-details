<?php
session_start();
include 'connection.php';
if(!isset($_SESSION["email"])){
    header("Location: manager_signin.php");
    exit();
}
if(isset($_GET["logout"])){
    session_destroy();
    header("Location: manager_signin.php");
}
$id=$_GET['id'];
$delete_query="delete from employee where id=$id";
$query= mysqli_query($con, $delete_query);

if($query){
    echo "<script> alert('Data deleted succesfully.'); window.location.href = 'home.php';</script>";
}
?>