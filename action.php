<?php
include "koneksi.php";
$action = strtolower($_POST['action']);
$id = $_REQUEST['id'];

if ($action == "delete")
{
echo "Anda memilih aksi delete pada record $id... <br/>";
$delete = "delete from tbl_daftar_mahasiswa where id_daftar = '$id'";
$delete_query = mysql_query($delete);
if ($delete_query) echo "Record $id berhasil dihapus!<br><META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata.php'>";
else echo "Gagal menghapus record<br><META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata.php'>";
}

else 
{
$select = "select * from tbl_daftar_mahasiswa where id_daftar = '$id'";
$select_query = mysql_query($select);

while($select_result = mysql_fetch_array($select_query))
	{
		$id = $select_result['id_daftar'] ;
		$npm = $select_result['NPM'] ;
		$nama = $select_result['nama_pendaftar'] ;
		$jeniskelamin = $select_result['jns_kelamin'] ;
		$jurusan = $select_result['jurusan'] ;
		$ttl = $select_result['ttl'] ;
		$alamat = $select_result['alamat'] ;
		$kota = $select_result['kota'] ;
		$telepon = $select_result['telp'] ;


?>

<form action="update.php" method="POST">
<table border='1' width='35%' cellpadding='2'  cellspacing='2' align='center' bgcolor="#FFFFF">
<caption>
<h2>Edit Formulir Pendaftaran Anggota Baru CSRG</h2>
</caption>
<input type="hidden" name="id" size="30" value="<?php echo $id ; ?>" maxlength="50"/>
<tr><td>NPM</td><td><input type="text" name="NPM" value="<?php echo $npm ; ?>" size="" maxlength="50"/></td></tr>
<tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $nama ; ?>" size="30" maxlength="50"/></td></tr>
<tr><td>Jenis Kelamin</td><td><input type="radio" name="jenis_kelamin" value="pria"/><label for="jenis_kelamin">Pria</label>
<input type="radio" name="jenis_kelamin" value="wanita"/><label for="jenis_kelamin">Wanita</label>
</td></tr>
<tr><td>Jurusan</td><td>
<select name="jurusan">
<option value="Pilih Jurusan Anda">Pilih Jurusan Anda</option>
<option value="IF">Teknik Informatika [IF]</option>
<option value="TI">Teknik Informatika [TI]</option>
<option value="MI">Management Informatika [MI]</option>
<option value="TK">Teknik Komputer [TK]</option>
<option value="SI">System Informatika [SI]</option>
</select>
</td></tr>
<tr><td>Kota Lahir</td><td><input type="text" name="kota" size="30" value="<?php echo $kota ; ?>" maxlength="50"/></td></tr>
<tr><td>Tanggal Lahir</td><td><input type="text" name="ttl" value="<?php echo $ttl ; ?>" size="30" maxlength="50"/></td></tr>
<tr><td>Alamat</td><td><textarea name="alamat"  cols="30" rows="4"><?php echo $alamat ; ?></textarea></td></tr>
</select></td></tr>
<tr><td>No Telepon</td><td><input type="text" name="telepon" size="30" value="<?php echo $telepon ; ?>" maxlength="50"/></td></tr>
<tr><td></td><td><input type="submit" name="kirim" value="Update!"/></td></tr>
</table>
</form>

<?php
	}
}
?>