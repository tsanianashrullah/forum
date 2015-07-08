<tr><td colspan=3 bgcolor='white'>
<form action="data/member/notif.php" method="post">
<table border=0 bordercolor=green>
<tr><td colspan=3><img src='data/member/DOK.jpg' width=100%></img></td></tr>
 <tr> <td>USERNAME</TD>
<td> : </TD> <td colspan=3> <input type="text" name="username" maxlength=6></TD> </TR> 
<tr> <td> NAMA DEPAN</TD>
<td> : </TD> <td> <input type="text" name="nama_depan"></TD> </TR> 
<tr> <td> NAMA BELAKANG </TD>
<td> : </TD> <td> <input type="text" name="nama_belakang"></TD> </TR> 
<tr> <td> EMAIL </TD>
<td> : </TD> <td> <input type="text" name="email" maxlength=15></TD> </TR> 
<tr> <td> PASSWORD </TD>
<td> : </TD> <td> <input type="text" name="password"></TD> </TR> 
<tr> <td> GENDER </TD>
<td> : </TD> <td> <input type="text" name="gender"></TD> </TR> 
<tr> <td> PASSWORD </TD>
<td> : </TD> <td> <input type="text" name="password"></TD> </TR> 
<tr> <td> FILE NAME </TD>
<td> : </TD> <td> <input type="text" name="file_name"></TD> </TR> 
<tr> <td> MIME TYPE </TD>
<td> : </TD> <td> <input type="text" name="mime_type"></TD> </TR> 
<tr> <td> FILE DATA </TD>
<td> : </TD> <td> <input type="text" name="file_data"></TD> </TR> 
<tr> <td> PERTANYAAN </TD>
<td> : </TD> <td> <input type="text" name="pertanyaan"></TD> </TR> 
<tr> <td> JAWABAN </TD>
<td> : </TD> <td> <input type="text" name="jawaban"></TD> </TR> 
<tr> <td> JOIN </TD>
<td> : </TD> <td> <input type="text" name="join"></TD> </TR>
<tr> <td> ULANG TAHUN </TD>
<td> : </TD> <td> <input type="text" name="ulang_tahun"></TD> </TR>  
<tr> <td> TANGGAL </TD>
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