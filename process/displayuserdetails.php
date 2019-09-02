<?php

$id_user=$_GET['id'];

$qry2="SELECT * FROM `maklumat_pelajar` WHERE `id`='$id_user'";
$result2=mysqli_query($database,$qry2);
$row2=mysqli_fetch_array($result2);
if(!isset($row2)){
echo "error dude";
}
else
{
$iduser=$row2['id'];
$nama=$row2['nama'];
$username=$row2['username'];
$password=$row2['password'];
$no_phone=$row2['no_phone'];
$noic=$row2['noic'];
$no_ndp=$row2['no_ndp'];
$jantina=$row2['jantina'];
$sesi=$row2['sesi'];
$alamat=$row2['alamat'];
$kursus=$row2['kursus'];

}
if(!isset($user_check)!= ''){
echo $qry;
//header("location: ../index.html");
}
?>