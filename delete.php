<?php
$server = "localhost";
$user = "root" ;
$password = "" ;
$db_name = "dbalbum" ;
$table_name = "tbalbum";

$koneksi = mysqli_connect($server, $user, $password);
include"db_connect.php";
$title=$_GET['title'];
$show = mysqli_query($koneksi, "DELETE FROM $table_name WHERE title = '$title';") or die ("The title Is Already Made");
?>
<script language="JavaScript">
document.location='index.php'</script>

 	<style type="text/css">

<center>
	<h2><b><i><u>Data Deleted Succesfully</u></i></b></h2>
</center>
