<?php
	//require('dbconn.php');
	require_once('Dao/connection.php');
	/*session_start();
	if(!$_SESSION['UserID']){
		echo session_flash('errorMessage');
	}*/
	  
?>

<!DOCTYPE html>
<html>
<head>

	<title>Get Your Ticket Now</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="TRVL, 24x7 Institute Bus Booking Portal" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>

<body>
	<?php
require 'dbconn.php';
?>
	<h1>TRVL</h1>
	<h3>Get yor ticket now...</h3>

	<br>

	<div class="container">

		<div class="login">
			<h2>Sign In</h2>
			<form action="Dao/userLogin.php" method="post">
				<p> Sign In As </p>
				<select name="Type" id="type">
					<option value="Student">Student</option>
					<option value="Faculty">Faculty</option>
					<option value="Staff">Staff</option>
				</select>
				<br>
				<br>
				<input type="number" Name="UserID" placeholder="User ID" required="">
				<input type="password" Name="Password" placeholder="Password" required="">
				<div class="send-button">
						<input type="submit" name="signin" value="Sign In">
				</div>
			</form>
			<div class="clear"></div>
		</div>

		<div class="register">
			<h2>Sign Up</h2>
			<form action="Dao/userLogin.php" method="post">
				<p> Sign Up As </p>
				<select name="Type" id="Type">
					<option value="Student">Student</option>
					<option value="Faculty">Faculty</option>
					<option value="Staff">Staff</option>
				</select>
				<br> <br>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#Type').on('change', function(){
							if(this.value == 'Faculty'){
								$("#batch").hide();
								$("#dept").show();
							}
							else if(this.value == 'Staff'){
								$("#batch").hide();
								$("#dept").hide();
							}
							else if(this.value == 'Student'){
								$("#batch").show();
								$("#dept").show();
							}
						});
					});
				</script>
				<input type="number" Name="UserID" placeholder="User ID" required="">
				<input type="text" Name="Name" placeholder="Name" required>
				<input type="password" Name="Password" placeholder="Password" required>
				<div id='batch'>
				    <input type="number" Name="Batch" placeholder="Batch">
				</div>
				<div id = 'dept'>
				<p> Department </p>
				<select name="Dept" id="Dept">
					<option value="CSE">CSE</option>
					<option value="ECE">ECE</option>
					<option value="ME">ME</option>
					<option value="NS">NS</option>
				</select>
				</div>

				<br>

				<p> Gender </p>
				<select name="Gender" id="Gender">
					<option value="M">Male</option>
					<option value="F">Female</option>
					<option value="R">Rather Not Say</option>
				</select>

				<br><br>

                <div class="send-button">
                    <input type="submit" name="signup" value="Sign Up">
                </div>
            </form>
			<p>By creating an account, you agree to our terms</p>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	<div class="footer w3layouts agileits">
    	<p>Copyright 2022<span class="copyright">&copy;</span> Kipruto. All Rights Reserved </a></p>
		<p><a class="underline" href="aboutus.php">About the Project</a></p>
	</div>

</body>
</html>
