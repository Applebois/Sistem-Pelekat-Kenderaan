<?php
include('database.php');
$mpid = $_POST['mpid'];
$type = $_POST['type'];
$vino = $_POST['vino'];
$vicmo = $_POST['vicmo'];
$vicco = $_POST['vicco'];
$vicP = $_POST['vicP'];
$vicsP = $_POST['vicsP'];
$vid = $_POST['vid'];

$query ="UPDATE `pendaftaran_pelajar` SET `jeniskenderaan`='$type',`noplat`='$vino',`model`='$vicmo',`warna`='$vicco',`status_pembayaran`='$vicsP',`jumlah_pembayaran`='$vicP' WHERE `id`='$vid'
";

$exe = mysqli_query ($database,$query);
		echo '<script type="text/javascript">alert("Updated vehicle is Succesfull");</script>';
		header("Refresh: 0; url=../AdminSite/butirankenderaan.php?id=".$mpid."");

?>