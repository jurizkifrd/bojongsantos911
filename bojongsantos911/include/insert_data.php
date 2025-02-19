<?php
include 'includes/db.php';

if(isset($_POST['insert']))
{
    $nama         = clean($_POST['nama']);
    $kehilangan        = clean($_POST['kehilangan']);
    $tempat        = clean($_POST['tempat']);
    $kronologi        = clean($_POST['kronologi']);
    $image_name   = $_FILES['image']['name'];
    $image        = $_FILES['image']['tmp_name'];

    $location     = "barang/".$image_name;


    move_uploaded_file($image, $location);


    $query = "INSERT INTO student (nama,kehilangan,tempat,kronologi,image) VALUES ('".escape($nama)."', '".escape($kehilangan)."','".escape($tempat)."','".escape($kronologi)."' , '$image_name')";

    $result = mysqli_query($conn,$query);

    if($result == true)
    {
        header("Location:index.php");
    }
    else
    {
        die('error' . mysqli_error($conn));
    }

}
?>