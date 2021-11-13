<html>
<head>
<title>Cari Data Album</title>
</head>
<body>
<?php
echo"<p align='center'><font color='darkgreen'face='Tahoma'size=4><b>
<br>My Favorite Albums Music</b></font><br><br></p>";
include"db_connect.php";
$keyword=$_POST['keyword'];
$field=$_POST['field'];
$query=mysqli_query($koneksi,"select*from tbalbum where $field like'%$keyword%'");
$jumlah=mysqli_num_rows($query);
$no_urut=0;
echo"<br>";
echo"<table border=\"3\"align=\"center\"cellpadding=\"1\"cellspacing=\"4\"bordercolor=\"blue\"bgcolor=\"white\">
<tr bgcolor='brown'height=\"30\"><font color='white'>
	<th align='left'><font color='white'face='Tahoma'size=3>No</font></th>
	<th align='left'  width='150'><font color='white'face='Tahoma'size=3>Title</font></th>
	<th align='left' width='150'><font color='white'face='Tahoma'size=3>Artist</font></th>
	<th align='left' ><font color='white'face='Tahoma'size=3>Action</font></th>
</tr>";
while($row=mysqli_fetch_array($query))
{
	$no_urut++;
	echo"<tr><td>$no_urut </td>";
	echo"<td>";
	echo $row["title"];
	echo"</td><td>";
	echo $row["artist"];
	echo"</td><td>";
	echo"<a href='delete.php?title=".$row['title']."'title=\"Delete\">Delete</a>|
	<a href='edit.php?title=".$row['title']."'title=\"edit\">Edit</a></td>";
	}
	echo"</table>";
	echo"<p align=\"center\"><font color='black'face='Tahoma'size=2>Jumlah Record:
	$jumlah</font></p>";
	echo"<p align=\"center\"><a href=\"index.php\">Back</a></p>";
	?>
	</body>
	</html>