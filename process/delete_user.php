<?php
include ('database.php');

$id=$_GET['id'];
	
$delete = "DELETE FROM maklumat_pelajar WHERE id = '$id'";
$r = mysqli_query($database,$delete);
echo '<script type="text/javascript">alert("Delete User Is Done!");</script>';
header("Refresh: 0; url=../AdminSite/Userlist.php");


	
?>