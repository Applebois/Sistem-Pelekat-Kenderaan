<?php
date_default_timezone_set("Asia/Kuala_Lumpur"); 
$time = date("h:i:a");
include("../process/database.php");
include('../process/Auth.php');

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
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/datatables.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</head>
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
      <div class="searchform">
        <form id="formsearch" name="formsearch" method="post" action="#">
          <span>
          </span>
        </form>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active" ><a href="index.php"><span>Home Page</span></a></li>
          <li ><a href="register.php"><span> Register Form</span></a></li>
          <li><a href="../process/logout.php"><span>Logout</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
     <h2><span>Welcome</span> <?php echo $username; ?> </h2>

      <div class="clr"></div>
    </div>
  </div>
    <br/>

    <div class="content">
  <center>
   <h3> All Your Vehicle will be listed here</h3>
  </center>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <div class="clr"></div>
          <br/>
          <div class="post_content">
                   <table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th width="5px"> BIL</th>
						 <th> Vehicle Type </th>
						 <th> Vehicle Identification Number </th>
						 <th> Vehicle Model  </th>
						 <th> Color </th>
                         <th> License </th>
                         <th> Edit/Delete </th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
					<?php
			$sql ="SELECT * FROM pendaftaran_pelajar where mpid=$userid ";
			 
			$result = mysqli_query($database,$sql);
			$count = 1;
							if ((mysqli_num_rows($result)== 0))
									{
										?>
                                        
                                        <td colspan="7" style="text-align:center"> Tiada maklumat tersimpan</td>
                                        </tr>
                                        
                                        <?php
									}
									else{
										while($row = mysqli_fetch_array($result))
										{ 
										?>
										<td style="text-align:center" > <?php echo $count; ?> </td>
										<td style="text-align:center" > <?php echo $row['jeniskenderaan']; ?> </td>
                                        <td style="text-align:center" > <?php echo $row['noplat']; ?> </td>
                                        <td style="text-align:center" > <?php echo $row['model']; ?> </td>
                                        <td style="text-align:center" > <?php echo $row['warna']; ?> </td>
                                        <td style="text-align:center" > <?php 										
										 $gambo =$row['lesen']; 
										if(!empty($gambo))
										{
										
										echo "<img src= '$gambo' alt='test' height='50px' width='80px'/>";
										
										
										}else{
										
										echo "<b> No data available</b>";
										}
										?>
                                        </td>
										<td style="text-align:center"> 
										<a href="edit_details.php?id=<?php echo $row['id'];?>">
                                        <img src="../images/pencil.png" width="25" height="25" /></a>&nbsp;&nbsp;&nbsp; 
                    					<a href="../process/delete_vehicle.php?id=<?php echo $row['id'];?>">
                                        <img src="../images/tong.jpg" width="25" height="25"/>                                       
                                        </td>
										</tr>                                               
										<?php
										$count += 1;}
										}
										
								 
					
		?>
                    
                    </tr>
                    
				</tbody>
			</table>

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
