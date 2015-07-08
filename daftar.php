<html>
<head>
<title>Pendaftaran</title>
</head>
<body>
<form method="post" name="pendaftaran" action="proses_daftar.php">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>PENDAFTARAN</font></center></td>
</tr>
<tr>
<td>Username</td><td>:</td><td><input type="text" name="username"></td>
</tr>
<tr>
<td>Nama Lengkap</td><td>:</td><td><input type="text" name="fn" placeholder='Nama Depan'> <input type="text" name="ln" placeholder='Nama Belakang'></td>
</tr>
<tr>
<td>Email</td><td>:</td><td><input type="text" name="email"></td>
</tr>
<tr>
<td>Password</td><td>:</td><td><input type="password" name="password"></td>
</tr>
<tr>
<td>Jenis kelamin</td><td>:</td><td><select name='jk'>
	<option value='Laki-Laki'>Laki-Laki</option>
	<option value='Perempuan'>Perempuan</option>
</select>
</td>
</tr>
<tr>
<td>Foto</td><td>:</td><td><input type="file" name="foto"></td>
</tr>
<tr>
<td>Pertanyaan</td><td>:</td><td><select name='per'>
	<option value='Siapa anak Tukang bakso?'>Siapa anak Tukang bakso?</option>

</select>

</td>
</tr>
<tr>
<td>Jawaban</td><td>:</td><td><textarea name="jawaban"> </textarea></td>
</tr>
<tr>
<td>Tanggal lahir</td><td>:</td><td>TANGGAL : <select name="t">
<?php

for($i=1;$i<=31;$i++)
{
  echo "<option value=$i>$i</option>";
}

?>
</select>
BULAN : <select name="b">
<?php

for($i=1;$i<=12;$i++)
{
  echo "<option value=$i>$i</option>";
}

?>
</select>
TAHUN : <select name="th">
<?php

for($i=1945;$i<=2014;$i++)
{
  echo "<option value=$i>$i</option>";
}
?>
</select></td>
</tr>
<tr>
<td colspan=2></td>
<td><input type="submit" name="submit" value="DAFTAR"></td>
</tr>
<tr>
<td colspan=3><a href="login.php">LOGIN</a></td>
</tr>
</table>
</form>
</body>
</html>

