<?php 

include 'connect.php';
if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password) ;
    $cpassword=$_POST['cpassword'];
    $cpassword=md5($cpassword) ;
    
    $sql="SELECT * FROM users WHERE email='$email' and password='$password' and cpassword='$cpassword'";
    $result=$conn->query($sql);
    if ($_POST['password'] == $_POST['cpassword']) {
     session_start();
     $row=$result->fetch_assoc();
     $_SESSION['email']=$row['email'];
     header("Location: package.php");
     exit();
    }
    else{
     echo '<script>alert("Not Found, Incorrect Email or Password")</script>';
    }
 
 }
 ?>