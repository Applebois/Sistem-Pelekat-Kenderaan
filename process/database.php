<?php
$database = mysqli_connect("localhost", "root", "", "spk");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else
{
//echo "Connected succesfuly";	
}

?>