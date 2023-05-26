<?php

$filename = $_FILES['scan_ktp']['name'];
$extension = pathinfo($_FILES["scan_ktp"]["name"], PATHINFO_EXTENSION);
$basename = $filename;

$folder = 'C:/xampp7.4/htdocs/majalengka/images/berkas/scanktp/';

$path = $folder . $filename;
$scanktp = $_FILES['scan_ktp']['name'];
$scanktpsementara = $_FILES['scan_ktp']['tmp_name'];

$folderscan = "../../images/berkas/scanktp/";
$uploadkis = move_uploaded_file($scanktpsementara, $folderscan.$basename);


// Data yang akan dikirim dalam format JSON
$data = array(
    'path' => $path
);

// URL tujuan
$url = "http://127.0.0.1:5000/scan";

// Mengirim permintaan menggunakan metode POST
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data)
    )
);

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Menghasilkan respons dari server
if ($result === FALSE) {
   
    echo "Error";
} else {
    echo $result;
}

?>