<?php

	include 'connectadmin.php';
	
	$no = $_GET['updatereq'];
	
	$sql = "SELECT * FROM leave_request WHERE emp_no=$no";
	
	$result = mysqli_query ($conn, $sql);
	
	$row = mysqli_fetch_assoc ($result);
	
	$name=$row['emp_name'];
	$reason = $row['emp_reasonleave'];
	$date = $row['emp_leavedate'];
	$duration = $row['emp_leaveduration'];
	$status = $row['emp_leavestatus'];
	
	if(isset($_POST['submit'])) {
		$name=$_POST['name'];
		$reason=$_POST['reason'];
		$date=$_POST['date'];
		$duration=$_POST['duration'];
		$status=$_POST['status'];
		
		$sql = "UPDATE leave_request SET emp_no=$no, emp_name='$name', emp_reasonleave='$reason', emp_leavedate='$date', emp_leaveduration=$duration, emp_leavestatus='$status' WHERE emp_no=$no";
		
		$result = mysqli_query($conn, $sql);
		
		if($result) {
			//echo "Data update successful!";
			header("refresh:1; url=Admin_ViewRequest.php");
			echo "<script> alert('Employee Leave Approval Updated!');window.location='Admin_ViewRequest.php' </script>";

		} else {
			die(mysqli_error($conn));
			echo "<script> alert('Employee Leave Approval Not Successful!');window.location='Admin_ViewRequest.php' </script>";
		}
	}
	
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Admin Page</title>

</head>
<body>
    
	<div class="container my-5">
		
	<form method="POST">
	
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter name" autocomplete="off" value=<?php echo $name; ?> readonly>
		</div>

		<div class="form-group">
			<label>Reason for leave</label>
			<input type="text" name="reason" class="form-control" placeholder="Enter reason for leave" autocomplete="off" value=<?php echo $reason; ?> readonly>
		</div>
		
		<div class="form-group">
			<label>Date for leave</label>
			<input type="text" name="date" class="form-control" placeholder="Enter date for leave" autocomplete="off" value=<?php echo $date; ?> readonly>
		</div>
		
		<div class="form-group">
			<label>Duration leave</label>
			<input type="text" name="duration" class="form-control" placeholder="Enter duration for leave" autocomplete="off" value=<?php echo $duration; ?> readonly>
		</div>
		
		<div class="form-group">
			<label>Leave status</label>
			<input type="text" name="status" class="form-control" placeholder="Approve/Reject">
		</div>
		
	<button type="submit" name="submit" class="btn btn-primary">Update</button>
	
	</form>
	
	</div>
   

</body>

</html>