<?php include "header.php"; ?>
<?php include "navigasi.php" ?>
<center>
<link rel="stylesheet" type="text/css" href="style.css"/>
<form class="content" action="insert.php" method="POST">
<table border='0' width='50%' cellpadding='2'  cellspacing='2' align='center' bgcolor="#FFFFF">
<div class="logo2">
    <img src="logo-csrg.png" />
</div>
<caption><h2>Formulir Pendaftaran Anggota Baru</h2></caption>
<tr><td><b>NPM<b/></td><td><input type="text" name="NPM" size="6" maxlength="50"/></td></tr>
<tr><td><b>Nama</b></td><td><input type="text" name="nama" size="30" maxlength="50" placeholder="Nama Lengkap"/></td></tr>
<tr><td><b>Jenis Kelamin</b></td><td><input type="radio" name="jenis_kelamin" value="pria"/><label for="jenis_kelamin"> Pria</label>
<input type="radio" name="jenis_kelamin" value="wanita"/><label for="jenis_kelamin"> Wanita</label>
</td></tr>
<tr><td><b>Jurusan</b></td><td>
<select name="jurusan">
<option value="Pilih Jurusan Anda">Pilih Jurusan Anda</option>
<option value="If">Teknik Informatika [IF]</option>
<option value="TI">Teknik Informatika [TI]</option>
<option value="MI">Management Informatika [MI]</option>
<option value="TK">Teknik Komputer [TK]</option>
<option value="SI">System Informatika [SI]</option>
</select>
</td></tr>
<tr><td><b />Asal sekolah</td><td><input type="text" name="asal_sokolah" size="30" placeholder="Asal sekolah" /></td></tr>
<tr><td><b>Tempat Lahir</b></td><td><input type="text" name="kota" size="30" maxlength="50" placeholder="Kota Kelahiran"/></td></tr>
<tr><td><b>Tanggal Lahir</b></td><td><input type="text" name="ttl" size="30" maxlength="50" placeholder="Tgl-Bulan-Tahun"/></td></tr>
<tr><td><b>Alamat</b></td><td><textarea name="alamat" cols="35" rows="4" placeholder="Alamat Lengkap"></textarea></td></tr>
<tr><td><b>No Telepon</b></td><td><input type="text" name="telepon" size="30" maxlength="50" placeholder="Nomor Aktif"/></td></tr>
<tr><td></td><td><input type="submit" name="kirim" value="Daftar!"/>
  <label>
  <input type="reset" name="Reset" id="button" value="Batal">
  </label></td></tr>
</table>
<h1>
<p align="center"><a href="lihatdata.php"><strong>Lihat Data </strong></a></p></h1>
</form>
</center>
<?php include "footer.php"; ?>