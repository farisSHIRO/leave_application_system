<?php

	include 'connectadmin.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Admin Leave Approval Page</title>

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

.menudis {
	background-color:#AA98A9;
	height: 135px;
	line-height: 135px;
}

.menuwidth {
	max-width: 1310px;
	margin: auto;
}

div.footer {
	clear: both;
	padding: 30px;
	background-color: black;
	color: white;
	text-align: center;
	bottom:0;
	right: 0;
	width:100%;
}

.viewreq2 {
	width: 70%;
	border: white;
	border-radius:10px;
	margin: auto;
	margin-top: 20px;
	margin-bottom: 40px;
	background-color: #FFF9F9;
	height:;
	padding:20px;
}
</style>

	<header>		   
		<div class="menudis">
			<div class="menuwidth">
				<a href="CompanyPage.html"><img src="logo_rexaro.png" height="135"> </a>
	
				<nav>
				<ul>
					<li class="active">
					<li><a href="Admin_ViewRequest.php">View Request</a></li>
					<li><a href="Admin_CheckStatus.php">Check Status</a></li>
					<li><a href="Rexaro_MainPage.html">Exit</a></li>
				</ul>
				</nav>
				
			</div>				
		</div>
	</header>
	
	<br>

	<div class="viewreq2">
	
	<div class="container my-5">
	
	<table class="table">
		
		<thead class="thead-dark">
			<tr>
				<th scope="col">Employee No</th>
				<th scope="col">Employee Name</th>
				<th scope="col">Employee Reason for Leave</th>
				<th scope="col">Employee Leave Date Request</th>
				<th scope="col">Employee Leave Duration Request</th>
				<th scope="col">Employee Leave Request Status</th>
				<th scope="col">Operations</th>
			</tr>
		</thead>
		
		<tbody>
		
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
					<td>
						<button class="btn btn-primary"> <a href = "UpdateApproval.php?updatereq='.$no.'" class="text-light"> Update </button> 
						<button class="btn btn-danger"> <a href = "DeleteApproval.php?deleteno='.$no.'" class="text-light"> Delete  </button>	
					</td>
				</tr>';
				}
			}
		
		?>
		
		

		  </tbody>
		</table>

	
	</div>
	
	</div>

	<div class="footer">
		Copyright &copy; 2022 Rexaro. All rights reserved.
	</div>
		
</body>

</html>