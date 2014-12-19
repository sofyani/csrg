<?php
include "koneksi.php";

$id = $_POST['id'];
$tanggal_daftar = date("Y-n-d");
$nama =  $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan =  $_POST['jurusan'];
$npm =  $_POST['NPM'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];

$query_update = "update tbl_daftar_mahasiswa set nama_pendaftar = '$nama', jns_kelamin = '$jenis_kelamin',
				 jurusan = '$jurusan', NPM = '$npm', ttl = '$ttl'
				 , alamat = '$alamat', kota = '$kota', telp = '$telepon'";



$update = mysql_query($query_update);

if($update)
	{
	include("redirectview.php");
	}

else
	{
	echo "Gagal update ... ";
	echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata.php'>";
	}