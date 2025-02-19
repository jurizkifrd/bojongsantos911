<?php
    session_start();
    require 'db.php';
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Riwayat Laporan</title>
      <link rel="stylesheet" href="css/riwlapor.css">
</head>
<body>


  <div class="wrapper">
    <div class="nav">
        <div class="logo">
          <?php include('message.php'); ?>
        </div>
        <ul>
            <a href="home.php"><li>Home</li></a>
            <a href="lapor.php"><li>Lapor Kehilangan</li></a>
			<a href="temubarang.php"><li>Menemukan Barang</li></a> 
            <a href="riwlapor.php"><li style="background-color:rgb(2, 101, 159);border-radius: 30px;">Riwayat Laporan</li></a>
			<a href="profil.php"><li>Profil</li></a>
            <a href="index.php"><li>Log Out</li></a>
            
        </ul>
    </div>


  <div class="container">
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Tanggal</th>
				<th>Status Laporan</th>
				<th>Status Barang</th>
				<th>Detail Barang</th>
			</tr>
		</thead>
		<tbody>
    <?php 
                                    $query = "SELECT * FROM students";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
			<tr>
      <td><?= $student['id']; ?></td>
      <td><?= $student['tanggal']; ?></td>
      <td><?= $student['status laporan']; ?></td>
      <td><?= $student['status barang']; ?></td>
      <td><?= $student['detail barang']; ?></td>
      <td>
          <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
          <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
          <form action="code.php" method="POST" class="d-inline">
              <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
          </form>
      </td>
      </tr>
                    <?php
                }
            }
            else
            {
                echo "<h5> No Record Found </h5>";
            }
        ?>
			</tr>
      



      <tr>
				<td>1</td>
				<td>2023-01-05</td>
				<td>Posting</td>
				<td>Belum Ditemukan</td>
				<td><img src="dompet1.jpg" alt=""> <br> selengkapnya...</td>
			</tr>
      		<tr>
				<td>2</td>
				<td>2022-10-23</td>
				<td>Posting</td>
				<td>Sudah Ditemukan</td>
				<td><img src="ktm.jpeg" alt=""> <br> selengkapnya...</td>
			</tr>
			<tr>
				<td>3</td>
				<td>2022-10-02</td>
				<td>Posting</td>
				<td>Sudah Ditemukan</td>
				<td><img src="helm.jpg" alt=""> <br> selengkapnya...</td>
			</tr>
		</tbody>
	</table>
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








