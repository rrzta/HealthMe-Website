<?php
//include 'connect.php';
$email = $_POST['email'];
$password = $_POST['password'];
session_start();
if (!empty($email)) {
if (!empty($password)) {
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
		$login = mysqli_query($conn,"select * from user where email='$email' and password='$password'");
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($login);
        
        // cek apakah username dan password di temukan pada database
        if($cek > 0){
        
            $data = mysqli_fetch_assoc($login);
        
            // cek jika user login sebagai admin
            
                // alihkan ke halaman login kembali
            header("location:../homepageafter.html");
            	
        } else{
        	header("location:../loginsalah.html");
        }
	}
}
else{
	header("location:../loginsalahkosong.html");
	die();
}
}	
else{
	header("location:../loginsalahkosong.html");	
	die();
}



?>

