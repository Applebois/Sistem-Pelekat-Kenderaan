<?php
include ('database.php');

$id=$_GET['id'];

$queryid="select * from pendaftaran_pelajar where id='$id'";
$resultid=mysqli_query($database,$queryid);
$papar= mysqli_fetch_array($resultid,MYSQLI_ASSOC);
{
	 $A = $papar['mpID'];	
	
}

	
$delete = "DELETE FROM pendaftaran_pelajar WHERE id = '$id'";
$r = mysqli_query($database,$delete);
echo '<script type="text/javascript">alert("Data Is Deleted!");</script>';
header("Refresh: 0; url=../AdminSite/butirankenderaan.php?id=".$A."");


	
?>