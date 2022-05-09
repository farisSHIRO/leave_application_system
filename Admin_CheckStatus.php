<!-- just a random comment -->
<?php

	include 'connectadmin.php';

?>

<html>
<head>
    <title>Check Status</title>	
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

.row{
	max-width: 1310px;
	margin: auto;
}
.container{
	background-color:#AA98A9;
	height: 135px;
	line-height: 135px;
	
	
}

.viewreq2 {
	width:1000px;
	border: white;
	border-radius:10px;
	margin: auto;
	margin-top: 20px;
	margin-bottom: 40px;
	background-color: #FFF9F9;
	height: 380px;
	padding:20px;
}

.kotak{
	background-color: #AA98A9;
	height: 45px;
	width: 340px;
	line-height: 40px;
	margin-left: 35px;
	font-family: 'Times New Roman';
	font-weight: bold;
	font-size:20px;
	margin-top:30px;
}

.inkotak{
	margin-left:15px;
	
}

table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
	margin-right:250px;
	margin-left:35px;
}

th, td {
	width :5%;
	padding-top: 5px;
	padding-bottom: 5px;
	padding-left: 7px;
	padding-right: 7px;
	font-size: 16px;
}


tr:nth-child(even) {
  background-color: #E8E4AD;
}

tr:nth-child(odd) {
  background-color: #D6EEEE;
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

.content:hover:not(.active)  {
	background-color: #AA98A9;
	color: white;
	
}

</style>  
	<header>
		<div class="container">
			<div class="row">
				<a href=""><img src="logo_rexaro.png" height="135"> </a>
					<nav>
						<ul>
					
							<li class="active"><a href="Admin_ViewRequest.php">Back</a></li>
							
					</ul>
				</nav>
			</div>
		</div>
	</header>
	
	
	<br>
	<br>
	
	<div class="viewreq2">
			<div class="kotak">
				<div class="inkotak">Leave request status of employees:</div>
			</div>
			<table summary="Request Status">
				<tr>
					<th style= width: 30%>Employee No</th>
					<th>Employee Name</th>
					<th>Reason for leave</th>
					<th>Date for leave</th>
					<th>Duration of leave</th>
					<th>Leave Status</th>
				</tr>
		
<?php
		
			$sql = "SELECT * FROM leave_request";
			
			$result=mysqli_query($conn, $sql);
			
			if($result) {
				while($row = mysqli_fetch_assoc($result)) {
					$no = $row['emp_no'];
					$name = $row['emp_name'];
					$reason = $row['emp_reasonleave'];
					$date = $row['emp_leavedate'];
					$duration = $row['emp_leaveduration'];
					$status = $row['emp_leavestatus'];
					
				echo '<tr>
					<th scope="row">'.$no.'</th>
					<td>'.$name.'</td>
					<td>'.$reason.'</td>
					<td>'.$date.'</td>
					<td>'.$duration.'</td>
					<td>'.$status.'</td>
				
				</tr>';
				}
			}
?>
	
			</table>
		</div>
	    
        <div class="footer">
			Copyright &copy; 2022 Rexaro. All rights reserved.
		</div>
		
	</body>
	
</html>		