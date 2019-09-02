<?php
include ('database.php');

$id=$_GET['id'];
	
$delete = "DELETE FROM pendaftaran_pelajar WHERE id = '$id'";
$r = mysqli_query($database,$delete);
echo '<script type="text/javascript">alert("Data Is Deleted!");</script>';
header("Refresh: 0; url=../UserSite/index.php");


	
?>