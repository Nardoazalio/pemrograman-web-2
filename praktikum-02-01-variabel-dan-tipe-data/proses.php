<?php

if(isset($_POST["spn"])){

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$program = $_POST["program"];

}

	if ($nim == "" || $nama == "" || $program == "") {
	echo "<p><h3>Isi Semua Data, Klik <a href='input.html'> di sini</a> untuk kembali</h3</p>";
	die;
   }

    echo '<h1>Hasil Input Data Mahasiswa</h1>';
	echo '<ul>';
	echo "<p>Hai, Perkenalkan nama saya adalah :".$nama.", 
	dengan NIM :".$nim.", Saya adalah mahasiswa dari Program Studi :".$program."<p>";


?>