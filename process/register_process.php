<?php
include('database.php');
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
$role= "2";


$query ="INSERT INTO `maklumat_pelajar`(`nama`, `username`, `password`, `no_phone`, `noic`, `no_ndp`, `jantina`, `sesi`, `alamat`, `kursus`,`role`) VALUES ('$name','$username','$password','$no_phone','$id_no','$student_card','$gender','$batch','$address','$course','$role')" ;
$exe = mysqli_query ($database,$query);
		echo '<script type="text/javascript">alert("Register is Succesfull");</script>';
		header("Refresh: 0; url=../index.php");

?>