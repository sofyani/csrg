<?php include "header.php"; ?>
<?php include "navigasi.php"; ?>
<center>
<div class="content">
<?php

include "koneksi.php";

$select = "select * from tbl_daftar_mahasiswa order by id_daftar desc";
$select_query = mysql_query($select);

?>

<html>
<head>
<title>Lihat Data</title>
</head>
<body>

<table style="font-size:11px;font-family:'arial';text-align:center;" border='1' width="80%" align='center' >
<caption><h1>Daftar Calon Anggota Baru CSRG</h1></caption>
<tr><th>No</th><th>Tanggal</th><th>NPM</th><th>Nama</th><th>Jenis Kelamin</th><th>Jurusan</th><th>Asal sekolah</th><th>Kota</th>
<th>Tanggal Lahir</th><th>Alamat</th><th>Telepon</th></tr>

<?php

while($select_result = mysql_fetch_array($select_query))
{

$id = $select_result['id_daftar'] ;
$tanggaldaftar = $select_result['tanggal_daftar'] ;
$npm = $select_result['NPM'] ;
$nama = $select_result['nama_pendaftar'] ;
$jeniskelamin = $select_result['jns_kelamin'] ;
$jurusan = $select_result['jurusan'] ;
$ttl = $select_result['ttl'] ;
$alamat = $select_result['alamat'] ;
$asal_sekolah = $select_result['asal_sekolah'];
$kota = $select_result['kota'] ;
$telepon = $select_result['telp'] ;


echo "<tr><td>$id</td><td>$tanggaldaftar</td><td>$npm</td><td>$nama</td><td>$jeniskelamin</td><td>$jurusan</td><td>$asal_sekolah</td><td>$kota</td>
<td>$ttl</td><td>$alamat</td><td>$telepon</td>
<td>
<form method=\"POST\" action=\"action.php?id=$id\"><input type=\"hidden\" value=\"$id\" name=\"id\">
<input type=\"submit\" name=\"action\" value=\"Update\"><br />
<input type=\"submit\" name=\"action\" value=\"Delete\">
</form>
</td>
</tr>";
}

?>
</center>
</div>
</table>
<center>
  <p>
    <input type="button" value="Input Data" onClick="window.location.href='form.php'">
  </p>
<form name="form1" method="POST" action="cari.php">
  <p>Masukan berdasarkan NPM :
    <input name="NPM" type="text" id="npm">
    <input type="submit" name="Submit" value="Cari">
  </p>
</form></p>
</center></p>

</body>
</html>
