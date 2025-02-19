<?php
include 'db.php';

if(isset($_POST['insert']))
{
    $nama         = clean($_POST['nama']);
    $kehilangan        = clean($_POST['kehilangan']);
    $tempat        = clean($_POST['tempat']);
    $kronologi        = clean($_POST['kronologi']);
    $image_name   = $_FILES['image']['name'];
    $image        = $_FILES['image']['tmp_name'];

    $location     = "image/".$image_name;


    move_uploaded_file($image, $location);
 


    $query = "INSERT INTO barang (nama,kehilangan,tempat,kronologi,image) VALUES ('".escape($nama)."', '".escape($kehilangan)."','".escape($tempat)."','".escape($kronologi)."' , '$image_name')";

    $result = mysqli_query($conn,$query);

    if($result == true)
    {
        header("Location:lapor.php");
    }
    else
    {
        die('error' . mysqli_error($conn));
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor Kehilangan</title>
    <link rel="stylesheet" href="css/lapor.css">
</head>
<body>
  <div class="nav">
      <div class="logo">
          <p>HELLO user</p>
      </div>
      <ul>
          <a href="home.php"><li>Home</li></a>
          <a href="lapor.php"><li style="background-color:rgb(2, 101, 159);border-radius: 30px;">Lapor Kehilangan</li></a>
          <a href="temubarang.php"><li>Menemukan Barang</li></a> 
          <a href="riwlapor.php"><li>Riwayat Laporan</li></a>
          <a href="profil.php"><li>Profil</li>
          <a href="index.php"><li>Log Out</li></a>
          
      </ul>
    </div>
    
    <div class="box">
      
        <div class="form">
          <h2>Lapor Kehilangan</h2> <p>Isilah data dibawah ini!</p>
          <form action="lapor.php" method="post">
            <div class="grid1">
              <p>
                <label>Nama</label>
                <input name="nama" class="fontwarna" type="text" placeholder="Isi nama anda sebagai pelapor">
              </p>
              <p>
                <label>Kehilangan</label>
                <input name="kehilangan" class="fontwarna" type="text" placeholder="Anda kehilangan apa?">
              </p>
              <p>
                <label>Tempat Kejadian</label>
                <input name="tempat" class="fontwarna" type="text" placeholder="Dimana anda mengalami kejadian tersebut?">
              </p>
              <p>
                <label>Gambar Barang</label>
                <input name="gambar" type="file">
              </p>
            </div>
            <p class="full-width">
              <label>Kronologi Kejadian</label>
              <textarea class="fontwarna" name="kronologi" cols="30" rows="7" placeholder="Ceritakan kejadian singkat kejadian anda"></textarea>
            </p>
            <p class="full-width">
            <input name="insert" type="submit" class="btn btn-primary" value="Tambah">
            </p>
          </form>
    </div>      
  </div> 


  <header>
    <!-- Content -->
  </header>
  
  <main>
    <!-- Content -->
  </main>
  
  <footer class="footer">
    <div class="footer__addr">
      <h1 class="footer__logo"><b>BOJONGSANTOS911</b></h1>
          
      <h2>Contact</h2>
      
      <address>
        Telkom Univeristy<br>
            
        <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
      </address>
    </div>
    
    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Media</h2>
  
        <ul class="nav__ul">
          <li>
            <a href="#">Online</a>
          </li>
  
          <li>
            <a href="#">Print</a>
          </li>
              
          <li>
            <a href="#">Alternative Ads</a>
          </li>
        </ul>
      </li>
      
      <li class="nav__item nav__item--extra">
        <h2 class="nav__title">Fungsionalitas</h2>
        
        <ul class="nav__ul nav__ul--extra">
          <li>
            <a href="#">Laporan Kehilangan</a>
          </li>
          
          <li>
            <a href="#">Menemukan Barang</a>
          </li>
          
          <li>
            <a href="#">Riwayat Laporan</a>
          </li>
          
          <li>
            <a href="#">Automation</a>
          </li>
          
          <li>
            <a href="#">Artificial Intelligence</a>
          </li>
          
          <li>
            <a href="#">IoT</a>
          </li>
        </ul>
      </li>
      
      <li class="nav__item">
        <h2 class="nav__title">Legal</h2>
        
        <ul class="nav__ul">
          <li>
            <a href="#">Privacy Policy</a>
          </li>
          
          <li>
            <a href="#">Terms of Use</a>
          </li>
          
          <li>
            <a href="#">Sitemap</a>
          </li>
        </ul>
      </li>
    </ul>
    
    <div class="legal">
      <p>&copy; 2023 Something. All rights reserved.</p>
      
      <div class="legal__links"></div>
    </div>
  </footer>
</body>
</html>



</body>
</html>








