<!DOCTYPE html>
<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

footer {
    padding: 1em;
    color: white;
    background-color: purple;
	opacity: 0.5;
    clear: left;
    text-align: center;
}

header{
    padding: 1em;
    color: white;
    background-color: blue;
	opacity: 0.6;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
</head>
<body>

<div class="container">

<header>
   <h1 >i-Sukan</h1>
</header>

<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php#two">Semak Status</a></li>

  </ul>
</nav>
  

<article>
  <h3>BORANG TEMPAHAN & PINJAMAN PERALATAN SUKAN / KOKURIKULUM / KEBUDAYAAN</h3>

<form method="post" action="process.php" enctype="multipart/form-data">
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
Surat Sokongan (jika ada) : <br>
<input type="file" name="file"/><br><br>
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
</article>

<footer>Copyright © W3Schools.com</footer>

</div>

</body>
</html>

