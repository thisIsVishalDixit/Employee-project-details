<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <nav>
   <a href="add.php">Add Details</a>
   <a href="display.php">Display Details</a>
   <a href="signin.php?logout=true"> Logout</a>
   </nav>
    <h1>User Side Display</h1>
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
            </tr>
        </thead>

        <tbody>
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

              $email= $_SESSION["email"];
              $user_id=$_SESSION['user_id'];
              $query=" select * from employee where user_id='$user_id'";
              $result=mysqli_query($con,$query);

               while($res= mysqli_fetch_array($result)){
                
                ?>
                  <tr>
                    <td><?php echo $res['name'];?></td>
                    <td><?php echo $res['start_time'];?></td>
                    <td><?php echo $res['end_time'];?></td>
                    <td><?php echo $res['project_name'];?></td>
                    <td><?php echo $res['task_description'];?></td>
                    <td><?php echo $res['rating'];?></td>
                    <td><a href="update.php?id=<?php echo $res['id'];?>">Update</a></td>
                  </tr>
                <?php
               }
            ?>
        </tbody>
    </table>
</body>
</html>