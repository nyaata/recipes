<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM recipe");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> View Recipes</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<body style="background-color:powderblue;">
<body>

 <a href="index.php"><button  class="btn btn-danger""> Logout</button></a>

  <div class="container">
<div class="row">
<div class="col-md-12">
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table id="mytable" class="table table-bordred table-striped"> 
  
  <tr>
    <th class="table-header" width="20%">ID</th>
    <th class="table-header" width="20%">Title</th>
    <th class="table-header" width="40%">Instructions</th>
    <th class="table-header" width="20%">Date</th>
   
    
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr class="table-row">
    
       <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["title"]; ?></td>
    <td><?php echo $row["instructions"]; ?></td>
    <td><?php echo $row["created_at"]; ?></td>
   
   
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>