<?php



if(isset($_POST["spn"])){

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$program = $_POST["program"];

}

	if ($nim == "" || $nama == "" || $program == "") {
	echo "<p>Isi Semua Data, Klik <a href='input.html'> di sini</a> untuk kembali</p>";
	die;
   }


    echo '<h1>Hasil Input Data Mahasiswa</h1>';
	echo '<ul>';
	echo '<li>NIM : ' . $_POST['nim'] . '</li>';
	echo '<li>NAMA : ' . $_POST['nama'] . '</li>';
	echo '<li>PROGRAM : ' . $_POST['program'] . '</li>';
    
	
?>