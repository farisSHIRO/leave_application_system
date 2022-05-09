<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Employee Request Leave Page</title>
	</head>
	<body>
	<style>
	*,html,body
{
	margin: 0;
	padding: 0;
}

header
{
	background-color: ;
	height: 135px;
	line-height: 135px;
}

ul
{
	list-style:none;
}

ul li
{
	display: inline-block;
}

header nav {
	float: right;
}

header nav ul li a {
	padding: 10px 20px;
	font-weight: bold;
	color: white;
	text-decoration: none;
	font-family: "Roboto", sans-serif;
	font-size: 15px;
	margin-right: 20px;
}


header nav ul li.active a {
	border: 1.5px solid orange;
	border-radius: 10px;
}

header nav ul li a:hover {
	text-decoration: none;
	border: 1.5px inset red;
	border-radius: 10px;
}

body {
	font-family: monospace;
	margin: auto;
	background-image: url("wp9723564-it-company-wallpapers.jpg");
}
P {
	font-family: Arial;
	font-size: 16px
}

.row{
	max-width: 1310px;
	margin: auto;
}
.container{
	background-color:#AA98A9;
	height: 135px;
	line-height: 135px;
	
	
}

.content:hover:not(.active)  {
	background-color: #AA98A9;
	color: white;
	
}

.form {
	width:800px;
	border: white;
	border-radius:10px;
	margin: auto;
	margin-top: 20px;
	margin-bottom: 40px;
	background-color: #FFF9F9;
	height: 400px;
	padding:20px;
}

input[type=text], select, textarea {
  width: 750px; 
  padding: 12px; 
  border: 1px solid #ccc; 
  border-radius: 4px;
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px;
  resize: vertical 
}

input[type=submit] {
  background-color: #625682;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


.footer {
	clear: both;
	padding: 30px;
	background-color: black;
	color: white;
	text-align: center;
	bottom:0px;
	position:fixed;
	width:100%;
}



	</style>
	<header>
		   
            <div class="container">
                <div class="row">
                    <a href=""><img src="logo_rexaro.png" height="135"> </a>
					<nav>
                    <ul>
                        <li class="active">
						<li><a href="Employee_CheckStatus.php">Check Status</a></li>
                    </ul>
                </nav>
                </div>				
            </div>
        </header>
		
		<br>
		<br>
	
	
		<div class="form">
		<p>REQUEST FOR LEAVE</p>
		<form class="contact-form" action="insert.php" method="post">
			<input type="text" name="name" placeholder="Employee Name">
			<input type="text" name="date" placeholder="Leave Date: yyyy-mm-dd">
			<input type="text" name="duration" placeholder="Leave Duration"> 							
			<textarea name="reason" placeholder = "Reason for Leave"></textarea>
				
			
			<input type="submit" class="btn btn-primary" name="submit" value="Submit">
			
		</form>
		</div>
		
		<div class="footer">
        Copyright &copy; 2022 Rexaro. All rights reserved.
		</div>
	</body>
</html>