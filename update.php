<center>
	<br>
	<h1>DATABASS with CRUD</h1>
~~~~~~~~~~~~~~~~~~ &emsp;  <a href="add.php" class="link">Add Data </a>|
<a href="index.php" class="link"> See Data</a>  &emsp; ~~~~~~~~~~~~~~~~~~
<br><br>
</center>

<?php
$title=$_POST['title'];
$artist=$_POST['artist'];
include"db_connect.php";


$show = mysqli_query($koneksi, "UPDATE $table_name SET title = '$title',artist = '$artist' WHERE artist = '$artist';");

?>
<center>
	<h2><b><i>Data Updated Succesfully</i></b></h2>
</center>