<?php
   $conn = new mysqli('localhost', 'root', '', 'leave_application_system');
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>