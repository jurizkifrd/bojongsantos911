<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BOJONGSANTOS911</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">

</head>
<body>
   <div class="overlay"></div>
   <form action="login.php" method="post" class="box">
       <div class="header">
           <h1>WELCOME BACK,</h1>
           <p>Kami <b>BOJONGSANTOS911</b> <br> Siap membantu anda! </p>
           <p><br> Silahkan Login untuk memulai bersama kami.</p>
       </div>
       <div class="login-area" style="background: rgba( 255, 255, 255, 0.25 );
       box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
       backdrop-filter: blur( 3.5px );
       -webkit-backdrop-filter: blur( 3.5px );
       border-radius: 10px;
       border: 1px solid rgba( 255, 255, 255, 0.18 );">
            <h2 style="text-align: left; margin-top: -30px;"><u>Login</u></h2>
            
           <input type="text" class="username" placeholder="Username" name="username">
           <input type="password" class="password" placeholder="Password" name="password">
            <button type="submit" class="submit" >Login</button>
           <h5>belum punya akun?<a href="signup.html"> Daftar disini</a></h5>
       </div>
   </form> 
</body>
</html>