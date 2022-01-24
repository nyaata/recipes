<?php
include_once 'config.php';
if(isset($_POST['submit']))
{    
 $title=$_POST['title'];
 $instructions=$_POST['instructions'];
 $created_at=$_POST['created_at'];

     $sql = "INSERT INTO recipe(title,instructions,created_at)
     VALUES ('$title','$instructions','$created_at')";
     if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
         header('location:dashboard2.php');
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>