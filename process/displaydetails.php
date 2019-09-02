<?php

$id_car=$_GET['id'];

$qry2="SELECT * FROM `pendaftaran_pelajar` WHERE `id`='$id_car'";
$result2=mysqli_query($database,$qry2);
$row2=mysqli_fetch_array($result2);
if(!isset($row2)){
echo "error dude";
}
else
{
$iddetails=$row2['id'];
$mpid=$row2['mpID'];
$vechiletype=$row2['jeniskenderaan'];
$vechileid=$row2['noplat'];
$vechilemo=$row2['model'];
$vechileco=$row2['warna'];
$vechilps=$row2['jumlah_pembayaran'];
$dl=$row2['lesen'];

}
if(!isset($user_check)!= ''){
echo $qry;
//header("location: ../index.html");
}
?>