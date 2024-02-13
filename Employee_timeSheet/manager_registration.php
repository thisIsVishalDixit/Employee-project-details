<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])){
    $username= $_POST['name'];
    $email= $_POST['email'];

    $pass= $_POST['password'];
    $password=password_hash($pass, PASSWORD_BCRYPT);
    $check_query="select * from manager where email='$email'";
    $check=mysqli_query($con, $check_query);
    if(mysqli_num_rows($check)>0){
        echo "<script> alert('User Already exists.'); window.location.href = 'manager_signup.php';</script>";
    }else{
        $insert_query= "insert into manager(name, email, password) values ('$username', '$email','$password') ";
        $res=mysqli_query($con, $insert_query);
        if ($res) {
            echo "<script> alert('Data inserted succesful.'); window.location.href = 'manager_signin.php';</script>";
        }else{
            "<script> alert('Data not inserted');</script>";
        }
    }
}
$con->close();
?>