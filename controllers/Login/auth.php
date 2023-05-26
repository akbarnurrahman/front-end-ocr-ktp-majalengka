<?php
session_start();
	include_once "../../class/Database.php"; //  koneksi database
	
	$pin = $_POST['pin']; // mengambil data dari form login yang berupa method post
	
	
	$db = new Database();
	$dbConnect = $db->connect();
	$data = mysqli_query($dbConnect,"select * from users where pin='$pin'");
	$cek = mysqli_num_rows($data);

	
	if($cek > 0 ) { 
			// Autentikasi berhasil
			$_SESSION['user'] = 'John Doe'; // Simpan data pengguna ke sesi
			$response = array('success' => true);
		} else {
			// Autentikasi gagal
			$response = array('success' => false);
		}
	
		echo json_encode($response);
	
	
?>
