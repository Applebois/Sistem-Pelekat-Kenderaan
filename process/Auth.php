<?php
session_start();
$user_check= $_SESSION['username'];
$qry2="SELECT * FROM `maklumat_pelajar` WHERE `username`='$user_check'";
$result2=mysqli_query($database,$qry2);
$row2=mysqli_fetch_array($result2);
if(!isset($row2)){
echo "error dude";
}
else
{
$userid=$row2['id'];
$username=$row2['username'];
}

if(!isset($user_check)!= ''){
echo $qry;
//header("location: ../index.html");
}
?>