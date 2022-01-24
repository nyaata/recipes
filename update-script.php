<?php
include_once 'config.php';

$result = mysqli_query($conn,"SELECT * FROM recipe");

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE recipe set id='" . $_POST['id'] . "',title='" . $_POST['title'] . "',instructions='" . $_POST['instructions'] . "', created_at='" . $_POST['created_at'] . "'  WHERE id='" . $_POST['id'] . "'");


        echo "recipe updated successfully.";
         header('location:dashboard2.php');


}
$result = mysqli_query($conn,"SELECT * FROM recipe WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<meta charset="utf-8">
    <title>Update Recipe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</head>


<body>
    <body style="background-color:powderblue;">
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>

ID: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">

<br>
Title: <br>
<input type="text" name="title" class="txtField" value="<?php echo $row['title']; ?>">
<br>
Instructions :<br>
<textarea name="instructions" class="txtField" rows="10"><?php echo $row['instructions']; ?></textarea>
<br>
Time: <br>
<input type="time" name="created_at" class="txtField" value="<?php echo $row['created_at']; ?>">
<br>

<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>

 
</body>
</html>
