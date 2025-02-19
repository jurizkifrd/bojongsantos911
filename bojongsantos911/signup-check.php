<?php
session_start();
include "koneksi.php";

if (isset($_POST['username']) && isset($_POST['password']) 
	&& isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['phone'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

	$re_password = validate($_POST['re_password']);
	$name = validate($_POST['name']);
    $phone = validate($_POST['phone']);

	$user_data = 'username='. $username. '&name='. $name;


    if (empty($username)) {
        header("location: signup.php?error=Username is required&$user_data");
        exit();
    }else if (empty($password)) {
        header("location: signup.php?error=Password is required&$user_data");
        exit();
    }
	else if (empty($re_password)) {
        header("location: signup.php?error=Re Password is required&$user_data");
        exit();
    }

	else if (empty($name)) {
        header("location: signup.php?error=Name is required&$user_data");
        exit();
    }

    else if (empty($phone)) {
        header("location: signup.php?error=Name is required&$user_data");
        exit();
    }

	else if ($password !== $re_password) {
        header("location: signup.php?error=The Confirmation Password Doesn't Match&$user_data");
        exit();
    }
	
	else{
       
		
		
		$sql = "SELECT * FROM users WHERE user_name='$username' ";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0) {
			header("location: signup.php?error=The Username is already taken&$user_data");
        	exit();
		}else  {
			$sql2 = "INSERT INTO users(user_name, pass, name, phone) VALUES('$username', '$password', '$name', '$phone')";
			$result2 = mysqli_query($conn, $sql2);
			if ($result2) {
			 	header("location: signup.php?success=Your Account has Been Created");
        	 	exit();
			}else{
				header("location: signup.php?error=Unknown Error Occured&$user_data");
        		exit();
			}
		}
    }

}else{
    header("location: signup.php");
    exit();
}
?>