<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $pass= $_POST['password'];
    $q= "select * from users where email='$email'";
    $res= mysqli_query($con, $q);
    if($res && mysqli_num_rows($res)==1){
        $row=mysqli_fetch_array($res);
        $hash= $row['password'];
        if(password_verify($pass, $hash)){
            $_SESSION['email']=$email;
            $_SESSION['user_id']=$row['id']; // Assuming 'id' column is the primary key
            header('location:add.php');
            exit();
        }else{
            echo "<script> alert('Data not matched.'); window.location.href = 'signin.php';</script>";
        }
    }else{
        echo "<script> alert('User not found.'); window.location.href = 'signin.php';</script>";
    }

}
?>
