<?php

	$conn = new mysqli('localhost', 'root', '', 'leave_application_system');

	if (!$conn) {
		die(mysqli_error($conn));
	}
		

?>