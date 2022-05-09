<?php

	include 'connectadmin.php';

	if(isset($_GET['deleteno'])){
		$no=$_GET['deleteno'];
		
		$sql = "DELETE FROM leave_request WHERE emp_no=$no";
		
		$result = mysqli_query ($conn, $sql);
		
		if($result) {
			//echo "Deleted successfully!";
			header("refresh:1; url=Admin_ViewRequest.php");
			echo "<script> alert('Record Deleted Successfully!');window.location='Admin_ViewRequest.php' </script>";

		} else {
			die(mysqli_error($conn));
			echo "<script> alert('Couldn't Delete Record. Please Try Again!');window.location='Admin_ViewRequest.php' </script>";

		}
	}
?>