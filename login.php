<?php

include 'db.php';

echo $name      = $_POST['email'];
echo $pass      = $_POST['password'];


   $checkUserquery="SELECT * FROM users WHERE email='{$name}' and password='{$pass}'";
   $resultant=mysqli_query($con,$checkUserquery);



    if(mysqli_num_rows($resultant)>0){

      Session_start();
      echo $_SESSION['username'] = $username;
      header("Location:pre.php");
    }
    else{
        header("Location:index.php");
    }



?>