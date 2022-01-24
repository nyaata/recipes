<?php
// include database connection file

include "config.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `recipe` WHERE `id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
         header('location:dashboard2.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 


?>
