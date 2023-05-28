<?php
session_start();
	include_once "../../class/Database.php"; //  koneksi database
	
	$pin = $_POST['pin']; // mengambil data dari form login yang berupa method post
	
	
	$db = new Database();
	$dbConnect = $db->connect();
	$data = mysqli_query($dbConnect,"select * from users where pin='$pin'");
	$cek = mysqli_num_rows($data);

	
	if($cek > 0 ) { 
		while ($rows = mysqli_fetch_array($data)):  // jika data bernilai 1 / true  buat session
			// Autentikasi berhasil
			$_SESSION['id'] = $rows['id']; // Simpan data pengguna ke sesi
			$_SESSION['new_user'] = $rows['new_user'];
		endwhile;
			$response = array('success' => true, 'netw_user' => $_SESSION['new_user']);
		} else {
			// Autentikasi gagal
			$response = array('success' => false,);
		}
	
		echo json_encode($response);
	
	
?>
