<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
   <a href="add.php">Add Details</a>
   <a href="display.php">Display Details</a>
   </nav>
   <h1>User Side Update</h1>

   <?php
   include 'connection.php';
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    $show_query="select * from employee where id='$id'";
    $show_data= mysqli_query($con, $show_query);

    if($show_data && mysqli_num_rows($show_data)>0){
        $arrdata= mysqli_fetch_array($show_data);
        
     if((empty($arrdata['rating']))){
        if(isset($_POST['submit'])){
            $start_time= $_POST['start_time'];
            $end_time= $_POST['end_time'];
            $project_name= $_POST['project_name'];
            $task_description= $_POST['task_description'];

            $update_query= "update employee set start_time='$start_time', end_time='$end_time',project_name='$project_name', task_description='$task_description' where id='$id'";

            $res=mysqli_query($con, $update_query);

            if($res){
                echo "<script> alert('Data updated succesfully.'); window.location.href = 'display.php';</script>";
            }else{
                echo "<script> alert('Data not updated.'); window.location.href = 'display.php';</script>";
            }
        }
    }else{
        echo "<script> alert('Permission denied.'); window.location.href = 'display.php';</script>"; 
    }
        ?>
<form action="" method="post">

    <label for="start_time">Start time</label>
    <input type="datetime-local" name="start_time"required value="<?php echo isset($arrdata['start_time']) ? $arrdata['start_time'] : ''; ?>">

    <label for="end_time">End time</label>
    <input type="datetime-local" name="end_time" required value="<?php echo isset($arrdata['end_time']) ? $arrdata['end_time'] : ''; ?>">

    <label for="project_name">Project name</label>
    <input type="text" name="project_name" value="<?php echo isset($arrdata['project_name']) ? $arrdata['project_name'] : ''; ?>" required>

    <label for="task_description">Task description</label>
    <textarea name="task_description" id="" cols="50" rows="10"><?php echo isset($arrdata['task_description']) ? $arrdata['task_description'] : ''; ?></textarea>

    <input type="submit" name="submit" value="Submit">
</form>

<?php

    }
 }
   ?>
</body>
</html>