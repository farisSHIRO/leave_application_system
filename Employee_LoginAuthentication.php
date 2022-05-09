<?php      
    include('Employee_LoginConnection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from employee where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
			echo "<script> alert('You have Successfully Logged In!');window.location='employee.html' </script>";
        }  
        else{  
            echo "<script> alert('Invalid Username or Password! Please Try Again.');window.location='Employee_LoginPage.html' </script>";   
        }     
?>  