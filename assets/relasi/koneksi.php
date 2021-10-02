<?php
ob_start();
//set time zone location sesuai negara, jadikan Asia Jakarta
date_default_timezone_set('Asia/Jakarta');

//**************************start koneksi ***************************//

//set koneksi ke server sesuai host, user, password dan database
$server="localhost";
$user="root";
$pass="";
$database="bisniskost";

//koneksikan ke server
$connect=mysqli_connect($server,$user,$pass,$database) or die('Error Connection Network');
if($connect){
    //echo "terkoneksi";
}

// **************************end koneksi *********************************//

//*********************pengaturan lainnya*****************************//



// $hostname="http://localhost:8080/xyz";
?>
