<!DOCTYPE html>
<html>
<head>

	<title>Facebook.com</title>

</head>

	<link rel="stylesheet" type="text/css" href="style.css">

<body>


		<form method="POST">

		
	<div class="main">
		<table align="left">
			
			<tr>
				<td>
					
					<p>
					&emsp;&emsp;
									<b>facebook</b>
					</p> 

				</td>
			</tr>
			
		</table>

		<form method="POST" action="facebook.php">
		

		<table class="up" align="right" cellspacing="15px;">
			
			<tr>
				<td> Email or Phone
					
				<br>

			<input type="text" name="em">
					
				
				<td> Password
					</b>
				<br>
			
			
			<input type="Password" name="pa">
					</td> <td>
				<br>
			
			
			<input class="login" type="Submit" name="login" value="Log In"> </td> 

		</table>

	</div>


		<div class="left">

			<b> Connect with friends and the world <br> around you on Facebook. </b>
			
			<br><br>
			
				<img src="papers.png"> 
					<font size="3">
						<b>  See photos and updates </b>from friends in News Feed. </font>
			<br> <br>
				
				<img src="monitor.png"> 
					<font size="3">
						<b>Share what's new </b> in your life on your Timeline. </font>
			<br> <br>
				<img src="share.png">
					 <font size="3">
					 	<b>Find more </b>  of what you're looking for with Facebook Search. </font>

		</div>


		<div class="right">
			<h1>Sign Up</h1>It's quick and easy.<br><br>

			<input style="padding: 8px; font-size: 15px; " type="text" name="fname" placeholder="First name">
																	
			<input style="padding: 8px; font-size: 15px; " type="text" name="lname" placeholder="Last name">
																	<br><br>
			<input style="padding: 8px; font-size: 15px; width: 370px;" type="text" name="email" placeholder="Mobile number or email">
																	<br><br>
			<input style="padding: 8px; font-size: 15px; width: 370px;" type="text" name="password" placeholder="New password">
																	<br><br>
			
																

			<b style="color: #3b5998;">
				 Birthday<br>
			</b>

			<input type="date" id="namebox" name="birthday">

	

	<b style="color: #3b5998;"><br><br> Gender <br> </b>

			<input type="Radio" name="gender" value="Female">Female
			<input type="Radio" name="gender" value="Male">Male
			<input type="Radio" name="gender" value="Custom">Custom

			<br>
			<br>

		<font size="2px">By clicking Sign Up, you agree to our Terms, <font color="blue"> Data Policy </font> and <font color="blue"> Cookies Policy. </font> You may receive SMS Notifications from us and can opt out any time.

		</font>

				<br> <br>
			
			<input class="signup"
					type="Submit" class="btn btn-success" name="signup" value="Sign Up" > <br> 

			<hr style="color: black" > <font size="2px" color="#3b5998"> <b> Create a Page </font> <font size="2px"> for a celebrity, band or business. </b></font>

		</div>

<?php

		$servername="localhost";
		$username="root";
		$password="";
		$databasename="dbfacebook";


		$connect= mysqli_connect($servername, $username, $password, $databasename);
?>


<?php
		if (isset($_POST ['signup'])){
			$firstname = $_POST['fname'];
			$lastname = $_POST['lname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$birthday = $_POST['birthday'];
			$gender = $_POST['gender'];

			

			$insert = "INSERT INTO tblfacebook (fname,lname,email,password,birthday,gender ) VALUES ('$firstname','$lastname','$email', '$password','$birthday','$gender')";

			$query = mysqli_query($connect,$insert);
			if ($query==True )
			{
					echo "<b>Record added </b>";
					header("location: facebook.php");
				}
				else {
					echo "<b>Record not added </b>";
				}
			}
			
		?>


<?php



		$servername="localhost";
		$username="root";
		$password="";
		$databasename="dbfacebook";


		$connect= mysqli_connect($servername, $username, $password, $databasename);

		if (isset($_POST ['login'])){

		$e = $_POST['em'];
		$p = $_POST['pa'];


			$query= "SELECT * FROM tblfacebook WHERE email = '$e' AND password = '$p'";
			$result = mysqli_query($connect, $query);
			$count= mysqli_num_rows($result);

			if ($count>0)
			{
				header("location: login.php");
			}
			else {
				echo "<h3><b>Username/Password is Incorrect</b></h3>";
			}
		}

?>


		</table>
</form>
	




	</body>
</html>