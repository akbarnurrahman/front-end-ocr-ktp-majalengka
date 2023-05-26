
<?php
	include "../../class/Pendaftaran.php";
	$pendaftaran = new Pendaftaran();
	

	
	
	$pendaftaran->nik = $_POST['nik'];
	$pendaftaran->nama = $_POST['nama'];
	$pendaftaran->kecamatan = $_POST['kecamatan'];
	$pendaftaran->kelurahan = $_POST['kelurahan'];
	$pendaftaran->provinsi = $_POST['provinsi'];
	$pendaftaran->alamat = $_POST['alamat'];
	$pendaftaran->rt_rw = $_POST['rt_rw'];
	$pendaftaran->agama = $_POST['agama'];
	$pendaftaran->tempat_lahir = $_POST['tempat_lahir']; 
	$pendaftaran->tanggal_lahir = $_POST['tanggal_lahir'];
	$pendaftaran->kabupaten_kota = $_POST['kabupaten_kota'];
	$pendaftaran->golongan_darah = $_POST['golongan_darah'];
	$pendaftaran->status_perkawinan = $_POST['status_perkawinan'];
	$pendaftaran->nik = $_POST['nik'];
	$pendaftaran->kewarganegaraan = $_POST['kewarganegaraan'];
	$pendaftaran->pekerjaan = $_POST['pekerjaan'];
	$pendaftaran->jenis_kelamin = $_POST['jenis_kelamin'];
	$pendaftaran->nm_awal_photo = $_POST['nm_awal_photo'];
	//menampung hasil dari method create_function


	$filename   = $_POST['kelurahan'] . "-" . $_POST['nama'] . "-" . $_POST['nik']; // 5dab1961e93a7-1571494241
	$extension  = pathinfo( $_FILES["scan_ktp"]["name"], PATHINFO_EXTENSION ); // jpg
	$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg

	$scanktp = $_FILES['scan_ktp']['name'];
	$scanktpsementara = $_FILES['scan_ktp']['tmp_name'];

	$folderscan = "../../images/berkas/scanktp/";
	$uploadkis = move_uploaded_file($scanktpsementara, $folderscan.$basename);

	$pendaftaran->scan_ktp = $basename;

	$error = $pendaftaran->create();
	
	//pengecekan error atau berhasil, !$error = berhasil
	if(!$error) {
		echo '&nbsp;&nbsp;';
		echo '<link rel="stylesheet" type="text/css" href="/../../sweetalert-master/dist/sweetalert.css">
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
			<script language="JavaScript" type="text/JavaScript">swal({
			  title: "Terima Kasih!",
			  text: "Data Yang Anda Masukan Sudah Tersimpan!",
			  icon: "success",
			  button: "Ok!",
			}).then(function() {
			window.location.href = "../../index.php?page=input";
			console.log("The Ok Button was clicked");
			});
;</script> ';
		
	} else {
		
		//membuat session untuk menampilkan pesan error bernama message
		echo '&nbsp;&nbsp;';
		echo '<link rel="stylesheet" type="text/css" href="/../../sweetalert-master/dist/sweetalert.css">
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
			<script language="JavaScript" type="text/JavaScript">swal({
			  title: "Peringatan!",
			  text: "Data Yang Anda Masukan Belum Lengkap !",
			  icon: "warning",
			  button: "Ok!",
			}).then(function() {
			window.history.go(-1); return false;
			console.log("The Ok Button was clicked");
			});
;</script> ';
	}
?>
