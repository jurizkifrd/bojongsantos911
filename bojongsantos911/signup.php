<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - BOJONGSANTOS911</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
   <div class="overlay"></div>
   <form action="signup-check.php" method="post" class="box">
   <!-- <form action="" method="post" class="box"> -->
       <div class="headerr">
           <h1>WELCOME,</h1>
           <p>Kami <b>BOJONGSANTOS911</b> <br> Siap membantu anda! </p>
           <p><br> Silahkan Daftar untuk memulai bersama kami.</p>
       </div>
       <div class="login-area">
            <h2 style="text-align: left; margin-top: -40px;"><u>SIGN UP</u></h2>

            <!-- <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            

            <?php if (isset($_GET['name'])) { ?>
                <input type="text" 
                       name="name" 
                       class="username" 
                       placeholder="Name" 
                       value="<?php echo $_GET['name']; ?>">
            <?php }else{ ?>
                <input type="text"  
                       name="name" 
                       class="username" 
                       placeholder="Name">
            <?php }?>
            

            <?php if (isset($_GET['username'])) { ?>
                <input type="text" 
                       name="username" 
                       class="username" 
                       placeholder="Username" 
                       value="<?php echo $_GET['username']; ?>">
            <?php }else{ ?>
                <input type="text" 
                       name="username" 
                       class="username" 
                       placeholder="Username">
            <?php }?>
            
            
            <?php if (isset($_GET['phone'])) { ?>
            <input type="text" 
                   name="phone" 
                   class="password" 
                   placeholder="Phone" 
                   value="<?php echo $_GET['phone']; ?>">
            <?php }else{ ?>
                <input type="text" 
                       name="phone" 
                       class="password" 
                       placeholder="Phone">
            <?php }?> -->
          
                <input type="text"  
                       name="name" 
                       class="username" 
                       placeholder="Name">
        
                <input type="text" 
                       name="username" 
                       class="username" 
                       placeholder="Username">

                <input type="text" 
                       name="phone" 
                       class="password" 
                       placeholder="Phone">
            
                <input type="password" name="password" class="password" placeholder="Password">
            <input type="password" name="re_password" class="password" placeholder="Confirm Password">
            <a href="home.html"><button type="submit" class="submit">Sign Up</button></a>
           <h5>Sudah punya akun?<a href="index.html"> Login disini</a></h5>
            </form>

           <?php
            
           ?>
           
       </div>
   </form> 
</body>
</html>