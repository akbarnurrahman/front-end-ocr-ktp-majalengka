<?php
session_start(); // Membuat session Baru
session_unset(); // Unset Semua Session yang Sudah Ada
session_destroy();
header("location:../../login.php");	
?>
