<!DOCTYPE html>
<html>
<title>Borang Pinjaman Peralatan Sukan</title>
<h3>BORANG TEMPAHAN & PINJAMAN PERALATAN SUKAN / KOKURIKULUM / KEBUDAYAAN</h3>

<form method="post" action="process.php">
<fieldset>
<legend>Borang Permohonan</legend>
<table>
<tr>
<td>Nama Penuh </td><td>: <input type="text" name="nama" /></td>
<tr><td>No. Pendaftaran  </td><td>: <input type="text" name="nopendaftaran" /></td></tr>
<tr><td>No. Telefon<br>( tanpa - ) </td><td>: <input type="text" name="telefon" /></td>
</tr>
</table>
<br>

Senarai barang yang ingin dipinjam : <br>
1. <input type="text" name="brg1" /><br>
2. <input type="text" name="brg2" /><br>
3. <input type="text" name="brg3" /><br><br>

Tarikh ingin meminjam : <input type="date" name="tarikh"/><br><br>
Tujuan meminjam : <br>
<textarea name="tujuanpinjaman" rows="2" cols="80"></textarea><br><br>
Perakuan Pemohon : <br>
<input type="checkbox" name="setuju">
Saya mengakui memohon untuk meminjam peralatan
tersebut untuk tujuan yang tertera diatas dan saya
berjanji akan menjaga peralatan yang dipinjam dengan
baik serta memulangkannya pada masa yang telah
ditetapkan.<br><br>
<center><input type="submit" name="submit" value="Mohon" /></center>
</fielset>
</form>
</html>