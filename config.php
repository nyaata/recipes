<?php
        $db_host= "localhost";
		$db_user = "root";
		$db_password = "";
		$db_name   = "recipes";

	 $conn= new mysqli($db_host,$db_user,$db_password,$db_name);

// Check connection is successful
	  if ($conn->connect_error) { 
       die("Connection failed: " . $conn->connect_error); 
   }
?>