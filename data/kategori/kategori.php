<tr><td colspan=3 bgcolor='white'>
<form action="data/kategori/notif.php" method="post">
<table border=0 bordercolor=green>
<tr> <td>ID KATEGORI</TD>
<td> : </TD> <td colspan=3> <input type="text" name="id_kategori" maxlength=6></TD> </TR> 
<tr> <td> JUDUL KATEGORI</TD>
<td> : </TD> <td> <input type="text" name="judul_kategori"></TD> </TR> 
<tr> <td> TANGGAL LAHIR </TD>
<td> : </TD> <td>TANGGAL : <select name="t">
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
</select>
</TD> 
</TR> 
<tr> <td> No. Telp</TD>
<td> : </TD> <td> <input type="text" name="telp" maxlength=13></TD> </TR> 
<tr> <td> ALAMAT </TD>
<td> : </TD> <td> <textarea name="alamat"> </textarea> </TD> </TR> 
<tr><td colspan=3><center>
<input type=submit name="kirim" value="SIMPAN"> 
<input type=reset name="reset" value="BATAL"> </td> </CENTER></table>
</tr>