<?php
include('database.php');
$type = $_POST['type'];
$vino = $_POST['vino'];
$vicmo = $_POST['vicmo'];
$vicco = $_POST['vicco'];
$userid = $_POST['userid'];
$uploadDir = '../LICENSE/'; //Image Upload Folder

$fileName = $_FILES['image']['name'];
$tmpName  = $_FILES['image']['tmp_name'];
$fileSize = $_FILES['image']['size'];
$fileType = $_FILES['image']['type'];
$filePath = $uploadDir . $fileName;
$result = move_uploaded_file($tmpName, $filePath);


if(!empty($fileName))
{
$query ="INSERT INTO `pendaftaran_pelajar`(`mpID`, `jeniskenderaan`, `noplat`, `model`, `warna`, `lesen`) VALUES ('$userid','$type','$vino','$vicmo','$vicco','$filePath')";
$exe = mysqli_query ($database,$query);
		echo '<script type="text/javascript">alert("Register is Succesfull");</script>';
		header("Refresh: 0; url=../UserSite/index.php");
}
else
{
$query ="INSERT INTO `pendaftaran_pelajar`(`mpID`, `jeniskenderaan`, `noplat`, `model`, `warna`) VALUES ('$userid','$type','$vino','$vicmo','$vicco')";

$exe = mysqli_query ($database,$query);
		echo '<script type="text/javascript">alert("Register is Succesfull");</script>';
		header("Refresh: 0; url=../UserSite/index.php");

	
}

?>