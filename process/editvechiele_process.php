<?php
include('database.php');
$type = $_POST['type'];
$vino = $_POST['vino'];
$vicmo = $_POST['vicmo'];
$vicco = $_POST['vicco'];
$vid = $_POST['vid'];

$query ="UPDATE `pendaftaran_pelajar` SET `jeniskenderaan`='$type',`noplat`='$vino',`model`='$vicmo',`warna`='$vicco' WHERE `id`='$vid'
";

$exe = mysqli_query ($database,$query);
		echo '<script type="text/javascript">alert("Updated vehcile is Succesfull");</script>';
		header("Refresh: 0; url=../UserSite/index.php");

?>