<?php
session_start();
include "koneksi.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("location: index.php?error=username is required");
        exit();
    }else if (empty($password)) {
        header("location: index.php?error=password is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_name='$username' AND pass='$password'";

        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $username && $row['pass'] === $password) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("location: home.html");
                exit();
            }else{
                header("location: index.php?error=Incorrect Username or Password"); 
                exit();
            }
        }else{
            header("location: index.php?error=Incorrect Username or Password");
            exit();
        }
    }

}else{
    header("location: index.php");
    exit();
}
?>