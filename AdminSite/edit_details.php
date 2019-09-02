<?php
date_default_timezone_set("Asia/Kuala_Lumpur"); 
$time = date("h:i:a");
include("../process/database.php");
include("../process/Auth.php");
include("../process/displaydetails.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Sistem Pelekat Kenderaan </title>
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
</head>
<style>
.textox {
   width: 177px;
   height: 20px;
   border: outset 1px #030303;
   padding: 2px;
   font-size: 12px;
   box-shadow: 0px 1px 2px 0px #9C9C9C;
   background-color: #FFFFFF;
   outline: none;
   color: #474747;
   text-align: left;
  }
.textox:hover  {
   border: 2px solid #FF00D5;
  }
.textox:focus  {
   border: solid 2px #00D43C;
   box-shadow: inset 0px 1px 2px 0px #9C9C9C;
  }
.textox:active  {
   border: solid 2px #0043EB;
  }input
{
float: right;
	
}

.btn {
  background: #86c2eb;
  background-image: -webkit-linear-gradient(top, #86c2eb, #1b6fa3);
  background-image: -moz-linear-gradient(top, #86c2eb, #1b6fa3);
  background-image: -ms-linear-gradient(top, #86c2eb, #1b6fa3);
  background-image: -o-linear-gradient(top, #86c2eb, #1b6fa3);
  background-image: linear-gradient(to bottom, #86c2eb, #1b6fa3);
  -webkit-border-radius: 11;
  -moz-border-radius: 11;
  border-radius: 11px;
  font-family: Arial;
  color: #ffffff;
  font-size: 15px;
  padding: 6px 20px 6px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
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
          <li ><a href="Userlist.php"><span> User List </span></a></li>
		  <li ><a href="report.php"><span> Report </span></a></li>
          <li><a href="../process/logout.php"><span>Logout</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
     <h2><span>Edit vehicle </span> details </h2>

      <div class="clr"></div>
    </div>
  </div>
    <br/>

    <div class="content">
  <center>
   <h3>Fill In the Blank Below Correctly</h3>
  </center>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <div class="clr"></div>
          <br/>
          <div class="post_content">
         <form method="post" action="../process/admin_editvechiele_process.php">
          <table bordercolor="" width="340px" style="font-size:18px" align="center">
          <th colspan="2"> Edit form </th>
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
          <td> <label> Type Vehicle : </label><input class="textox" type="text" name="type" value="<?php echo $vechilemo; ?>" style="border-style:none; width:170px;" placeholder="example 'Car/Bike'"> </td></tr>
          <tr>
          <td> <label> Vehicle id No :</label> <input class="textox" type="text" name="vino" value="<?php echo $vechileid; ?>" style="border-style:none; width:170px;" placeholder="example 'WED 2016'"></td>
        	</tr>
            <tr>
          <td> <label> Vehicle Model : </label><input class="textox" type="text" name="vicmo" value="<?php echo $vechiletype; ?>" style="border-style:none; width:170px;" placeholder="example 'Myvi'"> </td></tr>
          <tr>
          <td> <label> Vehicle Color  :</label> <input class="textox" type="text" name="vicco" value="<?php echo $vechileco; ?>" style="border-style:none; width:170px;" placeholder="example 'Gray'"></td>
        	</tr>
          <tr>       
		  	<td><label> Total Payment : </label>
            <input class="textox" type="text" name="vicP" value="<?php echo $vechilps; ?>" style="border-style:none; width:170px;" placeholder="example 'RM 150.00'">
			</td>
		  </tr>
		  <tr>       
		  	<td><label> Payment  Status : &nbsp;&nbsp;</label>
				<select name="vicsP" class="textox" style="border-style:none; width:170px;">
				  <option selected="true" disabled>Select Status</option>
				  <option value="Paid">Paid</option>
				  <option value="Unsettle">Unsettle</option>
				</select>
			</td>
		  </tr>
          <tr>
          <td colspan="2"><input type="text" name="vid" value="<?php echo $iddetails;  ?>" hidden="on" /></td>
		  <td colspan="2"><input type="text" name="mpid" value="<?php echo $mpid;  ?>" hidden="on" /></td>
          </tr>
          <tr>
          <td colspan="2"><input class="btn" type="submit" name="Submit" value="Update"></td>
          </tr>
          </table>
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
