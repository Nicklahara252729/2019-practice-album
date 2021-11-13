<?php  

$server = "localhost";
$user = "root" ;
$password = "" ;
$db_name = "db_album" ;
$table_name = "tbalbum";


$koneksi = mysqli_connect($server, $user, $password);

include "db_connect.php";
$title = $_GET['title'];
$show = mysqli_query($koneksi, "SELECT * FROM $table_name WHERE title = '$title'");

$data = mysqli_fetch_assoc($show);

?>
 	<style type="text/css">
 		a{
			text-decoration: none;
			color: black;
		}

 	</style>
<form action="update.php" method="POST">

<table border="0px" align="center" cellpadding="4px" cellspacing="4px">


	<tr>
		<td>Title</td>
		<td>:</td>	
		<td><input type="text" name="title" required="" value="<?= $data['title']; ?>"></td>	

	</tr>

	<tr>
		<td>Artist</td>
		<td>:</td>
		<td><input type="text" name="artist" required="" value="<?= $data['artist']; ?>"></td>
	</tr>


</table>
<center>
	<br>
<input type="submit" value="Send" />&emsp;
			<input type="reset" value="Reset">
		</center>
</form>
