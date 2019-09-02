<?php
if(isset($_POST['Submit']))
{	session_start();
	require_once('database.php');
 
	$ID = $_POST['username'];
	$password = $_POST['pass'];
	echo $qry="SELECT * FROM maklumat_pelajar WHERE username='$ID' and Password='$password'";
	$data = mysqli_query($database,$qry);
 	$row = mysqli_fetch_array($data);
	$count = mysqli_num_rows($data); 
	if($count == 1)
	{
		if($row['role'] =="2"){
				session_regenerate_id();
				$_SESSION['username'] = $ID;
				session_write_close();	
				header("location: ../UserSite/");
		}
		if($row['role'] =="1"){
				session_regenerate_id();
				$_SESSION['username'] = $ID;
				session_write_close();	
				header("location: ../AdminSite/");
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("User not exits");</script>';
		header("location: ../login.php");
		
	}
}
?>
