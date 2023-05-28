<?php
session_start();
	include_once "../../class/Database.php"; //  koneksi database
	
	$pin = $_POST['pin']; // mengambil data dari form login yang berupa method post
	$newpin = $_POST['newpin'];
	
	$db = new Database();
	$dbConnect = $db->connect();
	$$sql = "UPDATE users
    SET pin = '{$newpin}'
    WHERE pin = '{$pin}'";
    $data = $dbConnect->query($sql);
 
	
	if($cek > 0 ) { 
			// Autentikasi berhasil
			$_SESSION['user'] = 'Opet'; // Simpan data pengguna ke sesi
			$response = array('success' => true);
		} else {
			// Autentikasi gagal
			$response = array('success' => false);
		}
	
		echo json_encode($response);
	
	
?>
