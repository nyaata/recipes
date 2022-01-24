<?php

  
  // Include database connection file
  include_once('config.php');



    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role=$_POST['role'];

    $query  = "INSERT INTO users(firstname,lastname,email,password,role) VALUES ('$firstname','$lastname','$email','$password','$role')";
     $result = $conn->query($query);

  if ($result==true) {
    echo"User created successfully"
      header("Location:index.php");
      die();
    }else{
      $errorMsg  = "You are not Registered..Please Try again";
    }   
    
 



  


?>