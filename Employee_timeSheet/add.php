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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Pannel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <nav>
   <a href="add.php">Add Details</a>
   <a href="display.php">Display Details</a>
   <a href="signin.php?logout=true"> Logout</a>
   </nav>
   <h1>Add Employee Details</h1>
   <form action="insert.php" method="post">
 
    <label for="start_time">Start time</label>
    <input type="datetime-local" name="start_time">

    <label for="end_time">End time</label>
    <input type="datetime-local" name="end_time">

    <label for="project_name">Project name</label>
    <input type="text" name="project_name" placeholder="Expert messaging ststem"required>

    <label for="task_description">Task description</label>
    <textarea name="task_description" id="" cols="52" rows="5"></textarea>

    <input type="submit" name="submit" value="Add" >
</form>
</body>
</html>