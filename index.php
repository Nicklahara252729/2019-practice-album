<?php
$server = "localhost";
$user = "root" ;
$password = "satusampe250599" ;
$db_name = "2019_web_native_album" ;
$table_name = "tbalbum";
include "db_connect.php";
$data = mysqli_query($koneksi, "SELECT * FROM $table_name;");
$no_urut = 1;


?>
<html>
<font color='drakgreen'face='Tahoma'size=5><b><br>My Favorite Albums Music</b></font><br><br>
<a href='add.php'><font face='tahoma'size='2'>Add New Album</font></a>&emsp;<a href='search.php'><font face='tahoma'size='2'>Cari Album</font></a>
&emsp;<a href='#.php'><font face='tahoma'size='2'>Sort By Album</font></a> <br>
<br><table border="3" cellpadding="1" cellspacing="4" bordercolor="blue" bgcolor="white" border-collapse= "collapse" >
<tr bgcolor='brown'height=\"30\"><font color='white'>
<th align='center' ><font color='white'face='Tahoma'size=3>No</font></th>
<th align='center' width="150"><font color='white'face='Tahoma'size=3>title</font></th>
<th align='center' width="150"><font color='white'face='Tahoma'size=3>artist</font></th>
<th align='center' width="150"><font color='white'face='Tahoma'size=3>action</font></th>
</tr>

<?php while ($dt = mysqli_fetch_assoc($data) ) : ?>
<tr>
		<td><?= $no_urut++; ?></td>
		<td align='center'><?= $dt["title"]; ?></td>	
		<td align='center'><?= $dt["artist"]; ?></td>	

		<td align='center'><a href="delete.php?title=<?= $dt['title']; ?>" onclick="return confirm('You Cannot Restore It, Are You Sure ?');"> Delete |</a>
			<a href="edit.php?title=<?= $dt['title'];  ?>"> Edit</a></td>	
	</tr>

<?php endwhile; ?>
</html>
