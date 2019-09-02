<?php
include('database.php');
$iduser= $_POST['iduser'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['pass'];
$no_phone = $_POST['No_tel'];
$id_no = $_POST['id'];
$student_card = $_POST['scid'];
$batch = $_POST['batch'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$course = $_POST['course'];

$query ="UPDATE `maklumat_pelajar` SET `nama`='$name',`username`='$username',`password`='$password',`no_phone`='$no_phone',`noic`='$id_no',`no_ndp`='$student_card',`jantina`='$gender',`sesi`='$batch',`alamat`='$address',`kursus`='$course' WHERE id='$iduser'" ;
$exe = mysqli_query ($database,$query);
	echo '<script type="text/javascript">alert("Update is Succesfull");</script>';
	header("Refresh: 0; url=../AdminSite/UserList.php");

?>