
<?php   
$hostname  = "localhost";
$username  = "root";
$password  = "";
$dbname  = "modul5";
$conn = mysqli_connect($hostname, $username, $password, $dbname);


if(isset($_POST['kirim'])){
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];

  if(strlen($nim)==10){
    if(strlen($nama)==25){
      if (strpos($email,"@gmail.com")){
    $qry = mysqli_query($conn,"INSERT INTO pendaftaran VALUES($nim,'$nama','$email')");
    if ($qry) {
      echo "berhasil";
    }
    echo "-REGISTRASI ANDA BERHASIL-";
    
  }else{
    echo "REGISTRASI GAGAL !";
  }
    }else{
    echo "REGISTRASI GAGAL !";
  }
    }else{
    echo "REGISTRASI GAGAL !";
  }


  ?>
