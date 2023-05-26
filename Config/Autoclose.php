<?php

//mulai session
session_start();

//cek lagi apakah session telah terdaftar untuk username tersebut
if (empty($_SESSION))
        {
			session_destroy();
            header('location:../../../index.php');
        }
   
?>