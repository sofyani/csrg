<?php
include "koneksi.php";

$tanggal_daftar = date("Y-n-d");
$nama =  $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan =  $_POST['jurusan'];
$npm =  $_POST['NPM'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];

$query_insert = "insert into tbl_daftar_mahasiswa(tanggal_daftar, nama_pendaftar, jns_kelamin, jurusan, NPM,
													ttl, alamat, kota, telp)
												   values('$tanggal_daftar', '$nama', '$jenis_kelamin', '$jurusan', '$npm',
												    '$ttl', '$alamat', '$kota', '$telepon');";

$insert = mysql_query($query_insert);

if($insert)
	{
	include("redirectview.php");
	}

else
	{
	echo "Gagal update ... ";
	echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata.php'>";
	}

?>