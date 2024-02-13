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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Pannel </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <nav>
   <a href="home.php">Display Employee</a>
   <a href="manager_signin.php?logout=true"> Logout</a>
   </nav>
    <h1>Display Employee</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Start time</th>
                <th>End Time</th>
                <th>Project Name</th>
                <th>Task description</th>
                <th>Rating</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
               include 'connection.php';
               $selct_query= "select * from employee";
               $query= mysqli_query($con, $selct_query);
               while($res= mysqli_fetch_array($query)){
                ?>
                  <tr>
                    <td><?php echo $res['name'];?></td>
                    <td><?php echo $res['start_time'];?></td>
                    <td><?php echo $res['end_time'];?></td>
                    <td><?php echo $res['project_name'];?></td>
                    <td><?php echo $res['task_description'];?></td>
                    <td><?php echo $res['rating'];?></td>
                    <td><a href="manager_update.php?id=<?php echo $res['id'];?>">Update</a></td>
                    <td><a href="manager_delete.php?id=<?php echo $res['id'];?>">Delete</a></td>
                  </tr>
                <?php
               }
            ?>
        </tbody>
    </table>
</body>
</html>