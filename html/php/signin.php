<?php
//include 'connect.php';
session_start();
$nama = $_POST['nama'];
$no_telepon = $_POST['handphone'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['konfir_pass'];

if (!empty($email)) {
if (!empty($password)) {
	$host = "localhost";
	$dbemail = "root";
	$dbpassword = "Jaya12345@";
	$dbname = "healthme";
	$mysqli = new mysqli($host, "root",$dbpassword, $dbname);

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
           echo "sudah ada dalam database";
            	
        } else{

        	if ($password == $password2){
	        	$query = "insert into user (nama, no_telepon, alamat, usia, jenis_kelamin, email, password) values  (?,?,?,?,?,?,?)";
	            $stmt = $mysqli->stmt_init();
	            $stmt->prepare($query);
	            $stmt->bind_param('sssssss', $nama, $no_telepon, $alamat, $usia, $jenis_kelamin, $email, $password);
	            $stmt->execute();
	            $result = $stmt->get_result();
	            var_dump($result);
	            header("location:../page1.html");
	        }else{
	        	header("location:../Signin.html");
	        }
        }
	}
}
else{
	header("location:../signinsalah.html");
	die();
}
}	
else{
	header("location:../signinsalah.html");
	die();
}



?>
