<?php
date_default_timezone_set("Asia/Kuala_Lumpur"); 
$time = date("h:i:a");
//include("process/Auth.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Vehicle Sticker System </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-yanone.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<style>
<style> 
inputs:-webkit-input-placeholder {
    color: #b5b5b5;
}

inputs-moz-placeholder {
    color: #b5b5b5;
}

.inputs {
    background: #f5f5f5;
    font-size: 0.8rem;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    padding: 8px 10px;
    width: 270px;
    margin-bottom: 10px;
    box-shadow: inset 0 2px 3px rgba( 0, 0, 0, 0.1 );
    clear: both;
}

.inputs:focus {
    background: #fff;
    box-shadow: 0 0 0 3px #fff38e, inset 0 2px 3px rgba( 0, 0, 0, 0.2 ), 0px 5px 5px rgba( 0, 0, 0, 0.15 );
    outline: none;
}

input
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
      <h2>Vehicle Sticker System</h2>     
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li ><a href="index.php"><span>Home Page</span></a></li>
          <li ><a href="register.php"><span>Register Form</span></a></li>
          <li class="active"><a href=""><span>Login</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
     <h2><span>Login</span> From </h2>

      <div class="clr"></div>
    </div>
  </div>
    <br/>

    <div class="content">
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <div class="clr"></div>
          <br/>
          <div class="post_content">
         <form method="post" action="process/login_process.php">
          <table bordercolor="" width="200px" style="font-size:18px" align="center">
          <th colspan="2"> Login</th>
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
          <td colspan="2" align="center"> <input type="text" name="username" class="inputs" value="" style="border-style:none; width:170px;" placeholder="Username"></td>
        	</tr>
            <tr>
          <td colspan="2" align="center"><input type="password" name="pass" class="inputs" style="border-style:none; width:170px;" placeholder="Password"> </td>
          
        	</tr>
            <tr>
            <td>
            <center>
          <input class="btn" type="submit" name="Submit" value="Submit">
          </center>
          </td>
          </tr>
          </table>
          
        </form>
  <center>
   <h3>REMINDER :<i>After login then you can register your vehicle</i></h3>
  </center>

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
