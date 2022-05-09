<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
	 $name = $_POST['name'];
     $date = $_POST['date'];
     $duration = $_POST['duration'];
	 $reason = $_POST['reason'];
     $sql = "INSERT INTO leave_request (emp_name,emp_leavedate,emp_leaveduration,emp_reasonleave)
     VALUES ('$name','$date','$duration','$reason')";
     if (mysqli_query($conn, $sql)) {
       echo '<script> alert ("Request sent!") </script>';
		header("refresh:1; url=employee.html");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>