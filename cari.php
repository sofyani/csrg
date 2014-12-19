<title>Hasil Pencarian</title>
<?php
include "koneksi.php";

$npm=$_POST["NPM"];

include("koneksi.php");
$select = "select * from tbl_daftar_mahasiswa order by id_daftar desc";
$select_query = mysql_query($select);
?>
<?php

while($select_result = mysql_fetch_array($select_query))
{

$id = $select_result['id_daftar'] ;
$tanggaldaftar = $select_result['tanggal_daftar'] ;
$nama = $select_result['nama_pendaftar'] ;
$jeniskelamin = $select_result['jns_kelamin'] ;
$jurusan = $select_result['jurusan'] ;
$npm = $select_result['NPM'] ;
$ttl = $select_result['ttl'] ;
$alamat = $select_result['alamat'] ;
$kota = $select_result['kota'] ;
$telepon = $select_result['telp'] ;
}
echo"
<form method=\"POST\" action=\"action.php?id=$id\">
<table border=\"1\" width=\"35%\" cellpadding=\"2\" cellspacing=\"2\" align=\"center\" bgcolor=\"#FFFFF\">
<caption>
<h2>Pencarian Data</h2>
</caption>
<tr>
  <td>Nomor ID</td>
  <td><input type=\"text\" name=\"nama2\" size=\"30\" disabled=\"disabled\" maxlength=\"50\" value=$id></td>
</tr>
<tr><td>NPM</td>
<td><input type=\"text\" disabled=\"disabled\"  name=\"NPM\" size=\"30\" maxlength=\"50\" value=$npm/</td>
</tr>
<tr><td>Nama</td>
  <td><input type=\"text\" name=\"nama\" size=\"30\" disabled=\"disabled\" maxlength=\"50\" value=$nama></td>
</tr>
<tr><td>Jenis Kelamin</td><td><input type=\"text\" disabled=\"disabled\" name=\"jns_kelamin\" size=\"30\" maxlength=\"50\" id=\"jns_kelamin\" value=$jeniskelamin></td></tr>
<tr><td>Jurusan</td><td><input type=\"text\" name=\"jurusan\" disabled=\"disabled\"  size=\"30\" maxlength=\"50\" id=\"jurusan\" value=$jurusan></td></tr>
<tr><td>Kota</td><td><input type=\"text\" disabled=\"disabled\"  name=\"kota\" size=\"30\" maxlength=\"50\" value=$kota></td></tr>
<tr><td>Tanggal Lahir</td><td><input type=\"text\" disabled=\"disabled\"  name=\"ttl\" size=\"30\" maxlength=\"50\" value=$ttl></td></tr>
<tr><td>Alamat</td><td><textarea name=\"alamat\"  disabled=\"disabled\" cols=\"30\" rows=\"4\">$alamat</textarea></td></tr>
<tr>
  <td>No Telepon</td>
  <td><input type=\"text\"  disabled=\"disabled\" name=\"telepon2\" size=\"30\" maxlength=\"50\" value=$telp></td>
</tr>
<tr><td colspan=\"2\">
  <div align=\"center\">
  <input type=\"hidden\" value=\"$id\" name=\"id\">
    <input type=\"submit\" name=\"action\" value=\"Update\"> 
    <input type=\"submit\" name=\"action\" value=\"Delete\">
  </div></td></tr>
</table>
</form>"
?>
<p><center><input type="button" value="Lihat Data" onClick="window.location.href='lihatdata.php'"> <input type="button" value="Input Data" onClick="window.location.href='index.php'">
</center></p>
