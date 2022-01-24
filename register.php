
 <!DOCTYPE html>
 <html>
 <head>
 	<head>
	
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
 </head>
 <body style="background-color:powderblue;">
 <body>  



 	<style>
		   
 <!-- Color the website background -->
<body style="background-color:powderblue;">
		
 	</style>
 

 	<form  action="signup.php" method="post">
 		<div class="container py-5 h-100">
 	
   
 			<div class="form-group">
 			<label for:"firstname">Firstname:</label>
 			<input type="text" class="col" name="firstname" placeholder="Enter your firstname" required=""><br><br>
 		</div>
 		<div class="form-group">
 			<label for:"lastname">Lastname:</label>
 			<input type="text" class="col" name="lastname" placeholder="Enter your lastname" required=""><br><br><br>
 		</div>
 		<div class="form-group">
 			<label for:"email">Email:</label>
 			<input type="text" class="col" name="email" placeholder="Enter a valid email" required=""><br><br><br>
 		</div>
  <div class="form-group">
 			<label for:"password">Password:</label>
 			<input type="password" class="col" name="password" placeholder="Input a password" required=""><br><br><br>
 		</div>

		    <div class="form-group">  
            <label for="role">Role:</label>
            <select class="col" name="role" required="">
            	<option value="">Select Role</option>
              <option value="admin">Admin</option>
              <option value="user">User</option>
             
            </select>
          </div>

             <div class="form-group">
            <p>Already have account ?<a href="index.php"> Login</a></p>
            <input type="submit" name="submit" class="btn btn-primary" href="login.php">
          </div>
		 </form>


		 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- textaddneww -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:15px"
     data-ad-client="ca-pub-8906663933481361"
     data-ad-slot="3318815534"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>  
          
	 <script>

	 	function validate(){



	 		var firstname = form["reg_form"]["firstname"];
	 		var lastname = form["reg_form"]["lastname"];
	 		var email= form["reg_form"]["email"];
	 		var password = form["reg_form"]["password"];


	 		if(firstname.value ==" "){
	 			window.alert("Please enter your firstname");
	 			firstname.focus();
	 			return false;
	 		}

	 		if(lastname.value ==" "){
	 			window.alert("Please enter your lastname");
	 			lastname.focus();
	 			return false;
	 		}
	 		if(email.value ==" "){
	 			window.alert("Field cannot be empty");
	 			email.focus();
	 			return false;
	 		}
	 	
	 		if(password.value ==" "){
	 			window.alert("Please fill in this field");
	 			password.focus();
	 			return false;
	 		}


	 		return true;



// 	 	const reg_form = document.getElementById('reg_formss');
// 		const emailId = document.getElementById('emailId');
// 		const okButton = document.getElementById('okButton');
  
// emailId.addEventListener('keyup', function (event) {
//   isValidEmail = emailId.checkValidity();
  
//   if ( isValidEmail ) {
//     okButton.disabled = false;
//   } else {
//     okButton.disabled = true;
//   }
// });
	 	
	 		
	</script>

 </body>
 
 </body>
 </html>
	 	