<?php
//Membuat Masing-Masing Variabel Yang Dibutuhkan
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="koperasi";

//Koneksi dan Menentukan Database Di Server
$connect = new mysqli ($dbhost,$dbuser,$dbpass,$dbname);

if ($connect -> connect_error){

	die ('maaf databases tidak ada:  '. $connect -> connect_error);
}

?>