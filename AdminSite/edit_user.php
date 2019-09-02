<?php
$id = $_GET['id'];
date_default_timezone_set("Asia/Kuala_Lumpur"); 
$time = date("h:i:a");
include("../process/database.php");
include('../process/Auth.php');
include('../process/displayuserdetails.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Vehicle Sticker System </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/coin-slider.css" />
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-yanone.js"></script>
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/coin-slider.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="../css/admin.css" />
<link rel="stylesheet" href="../css/jquery.dataTables.css">

</head>
<style>
select {
  margin: 5px;
  padding: 0 10px;
  width: 300px;
  height: 34px;
  color: #404040;
  background: white;
  border: 1px solid;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 2px;
  outline: 5px solid #eff4f7;
  -moz-outline-radius: 3px;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}
select:focus {
  border-color: #7dc9e2;
  outline-color: #dceefc;
  outline-offset: 0;
}
input
{
float: right;
border-radius: 6px;
	
}
</style>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
      <h2>Sistem Pelekat Kenderaan</h2>     
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li ><a href="index.php"><span>Home Page</span></a></li>
          <li class="active"><a href="UserList.php"><span> User List </span></a></li>
		  <li ><a href="report.php"><span> Report </span></a></li>
          <li><a href="../process/logout.php"><span>Logout</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
     <h2><span>Edit</span> User <?php echo $nama; ?> </h2>

      <div class="clr"></div>
    </div>
  </div>
    <br/>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <div class="clr"></div>
          <br/>
          <div class="post_content">
         <form method="post" action="../process/update_process.php">
          <table bordercolor="" width="700px" style="font-size:18px" align="center">
          <th colspan="2"> Please update carefully</th>
          <tr >
          <td colspan="2"></td>
          </tr>
          <tr >
          <td colspan="2"></td>
          </tr>
          <tr >
          <td colspan="2"></td>
          </tr>
          <tr>
          <td> <label> Name : </label><input type="text" name="name" value="<?php echo $nama;?>" style="border-style:none; width:170px;" placeholder="Your Full Name"> </td>
          <td> <label>Username :</label> <input type="text" name="username" value="<?php echo $username;?>" style="border-style:none; width:170px;" placeholder="Username"></td>
        	</tr>
            <tr>
          <td> <label> Password : </label><input type="text" name="pass" value="<?php echo $password;?>" style="border-style:none; width:170px;" placeholder="Your password"> </td>
          <td> <label>No . Phones  :</label> <input type="text" name="No_tel" value="<?php echo $no_phone;?>" value="" style="border-style:none; width:170px;" placeholder="No . Phones"></td>
        	</tr>
          <tr>       
		  	<td>        <label> ID . NO : </label><input type="text" name="id" value="<?php echo $noic;?>" style="border-style:none; width:170px;" placeholder="identification number">
</td>
            <td><label> Student Card id : </label><input type="text" name="scid" value="<?php echo $no_ndp;?>" style="border-style:none; width:170px;" placeholder="Student Card id">
</td>
          </tr>
          <tr>
          <td><label> Batch : </label><input type="text" name="batch" value="<?php echo $sesi;?>" style="border-style:none; width:170px;" placeholder="Batch">
</td>
          <td><label> Gender : </label><input type="text" name="gender" value="<?php echo $jantina;?>" style="border-style:none; width:170px;" value="" placeholder="Gender">
</td>          
          </tr>
          <tr>
          <td><label> Address : </label><input type="text" name="address" value="<?php echo $alamat;?>" style="border-style:none; width:170px;" placeholder="Address">
</td>
          <td><label> Course  : </label><input type="text" name="course" value="<?php echo $kursus;?>"  style="border-style:none; width:170px;" placeholder="Course"></td>
          </tr>
          <tr>
          <td colspan="2">
		  <input type="text" name="iduser" value="<?php echo $iduser;?>" hidden="true">
          </tr>
          <tr>
          <td colspan="2"><input type="submit" name="Submit" value="Update"></td>
          </tr>
          </table>
		  <br/>
        </form>

          </div>
          <div class="clr"></div>
        </div>
          
          <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
<div id="footer2">  
  <div class="fbg">      
  <div class="footer">
    <div class="footer_resize">
    <center><font color="#00FFFF">Vehicle Sticker System</font></center>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</div>
</html>
