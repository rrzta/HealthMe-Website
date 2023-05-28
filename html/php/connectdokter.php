<?php
//include 'connect.php';
$ID = $_POST['ID'];
$tempat_praktik = $_POST['tempat_praktik'];
session_start();
if (!empty($ID)) {
if (!empty($tempat_praktik)) {
	$host = "localhost";
	$dbemail = "root";
	$dbpassword = "Jaya12345@";
	$dbname = "healthme";

	//create connection
	$conn = new mysqli($host,$dbemail,$dbpassword,$dbname);
	if (mysqli_connect_error()) {
		die('Connect error('.mysqli_connect_error().')'.mysqli_connect_error());
		# code...
	}
	else{
		$login = mysqli_query($conn,"select * from dokter where id_dokter='$ID' and tempat_praktik='$tempat_praktik'");
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($login);
        
        // cek apakah username dan password di temukan pada database
        if($cek > 0){
        
            $data = mysqli_fetch_assoc($login);
        
            // cek jika user login sebagai admin
            
                // alihkan ke halaman login kembali
            header("location:../homepageafterdokter.html");
            	
        } else{
        	header("location:../logindoktersalah.html");
        }
	}
}
else{
	header("location:../logindoktersalah.html");
	die();
}
}	
else{
	header("location:../logindokterkosong.html");	
	die();
}



?>

