<?php

include'connect.php';

if(isset($_POST['message'])){
    $message = $_POST['message'];
    $email = $_POST['email'];
    $username=$_POST['username'];

    $insertQuery="INSERT INTO message(username,email,message)
    VALUES('$username','$email','$message')";
    if($conn->query($insertQuery)==TRUE){
        header("location: index.php");
    }
    else{
        echo "Error:".$conn->error;
    }
}
