<?php
session_start();
include 'connection.php';

if(!isset($_SESSION["email"])){
    header("Location: signin.php");
    exit();
}
if(isset($_GET["logout"])){
    session_destroy();
    header("Location: signin.php");
}
$email = $_SESSION["email"];
$user_id = $_SESSION["user_id"];
$query = "SELECT name FROM users WHERE email = '$email'";
$result = mysqli_query($con, $query);
$res = mysqli_fetch_array($result);
$username = $res['name'];

if(isset($_POST['submit'])){
    $name = $username;
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $project_name = $_POST['project_name'];
    $task_description = $_POST['task_description'];

    $insert_query = "INSERT INTO employee (name, user_id, start_time, end_time, project_name, task_description) VALUES ('$name', '$user_id', '$start_time', '$end_time', '$project_name', '$task_description')";
    $res = mysqli_query($con, $insert_query);

    if($res){
        echo "<script> alert('Employee added successfully.'); window.location.href = 'add.php';</script>";
    }else{
        echo "<script> alert('Employee not added.'); window.location.href = 'add.php';</script>";
    }
}
?>
