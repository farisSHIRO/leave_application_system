<?php

include("connect2.php");

if(isset($_POST['submit'])) {
	$query = mysqli_query($conn,
	"INSERT INTO CONTACT SET name='"
	. $_POST["name"] . "' ,email ='"
	. $_POST["email"] . "' ,message ='"
	. $_POST["message"] . "'	 ");
	
?>
<script>alert('Your message have been sent. Soon the team will get back to you!');window.location='Rexaro_MainPage.html' </script>;


	


<?php
}
?>
<html>

<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	<style>
		th {
			text-align: left;
		}

		td {
			text-align: center;
		}

		a {
			text-decoration: none;
		}
		
		h1{
			color: black;
			background-color: #FFD801;
		}
		
		form{
			background-color: LightPink;
		}
		
	</style>
</head>

<body>
	<a href="home.html"></a>

	<form method="post" action="contact.php" name="frm1">

		<fieldset>
			<legend align="center">
				<h1>Contact Us</h1>
			</legend>
			<table align="center" border="1" width="40%" style="border:thick;">
				
				<tr>
					<th height="40"><label for="name">
							Name</label>
					</th>
					<td><input type="text"
							name="name"
							id="name" required>
					</td>
				</tr>
				
				<tr>
					<th height="40"><label for="email">
							Email</label>
					</th>
					<td><input type="text"
						name="email"
						id="email" required>
					</td>
				</tr>	

				<tr>
					<th height="40"><label for="message">
							Message</label>
					</th>
					<td><input type="text"
						name="message"
						id="message" required>
					</td>
				</tr>
				
				<tr>
					<td height="40" colspan="2"><input
						type="submit" name="submit"
						value="SEND">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>

</html>
