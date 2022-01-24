<?php
session_start();
include_once('config.php');

$msg="";
if(isset($_POST['Login']))
{
 //declare variables from form

	$email=$_POST['email'];
	$password=$_POST['password'];
	$role=$_POST['role'];

$query="SELECT * from users WHERE email='".$email."' and password='".$password."'  AND role='".$role."'" ;
$result=mysqli_query($conn,$query);

if($result>0){

	while($row=mysqli_fetch_array($result)){
		echo'<script type="text/javascript">alert("Welcome ' .$row['role'].'")</script>';
	 
}
	if($role =="admin"){
		?>
        <script type="text/javascript">
		window.location.href="dashboard2.php"</script>
		<?php
	}else if($role=="user")
	{
      ?>
		<script type="text/javascript">
		window.location.href="viewrecipe.php"</script>
		<?php 
	}
}else{

echo 'Wrong username and password';
}
}
$_SESSION['Login'] = true;
?>