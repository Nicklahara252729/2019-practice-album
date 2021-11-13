<center>
	<br>
<h2><b>Data Added Succesfully</b></h2>
~~~~~~~~~~~~~~~~~~ &emsp;  <a href="add.php" class="link">Add Data </a>|
<a href="index.php" class="link"> See Data</a>  &emsp; ~~~~~~~~~~~~~~~~~~
<br><br>

</center>
<?php
include "db_connect.php";

$title=$_POST['title'];
$artist=$_POST['artist'];


$server = "localhost";
$user = "root" ;
$password = "" ;
$db_name = "db_album" ;
$table_name = "tbalbum";

mysqli_query($koneksi, "INSERT INTO $table_name VALUES ('$title','$artist','');");

$koneksi = mysqli_connect($server, $user, $password);



?>

