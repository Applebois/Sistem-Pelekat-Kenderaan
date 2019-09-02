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
          <li ><a href="index.php"><span>Home Page</span></a></li>
          <li class="active"><a href="UserList.php"><span> User List </span></a></li>
		  <li ><a href="report.php"><span> Report </span></a></li>
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
   <h3> Manage User</h3>
  </center>
  </div>

  <div class="content2">
    <div class="content_resize2">
      <div class="mainbar2">
        <div class="article2">
          <div class="clr"></div>
          <br/>
          <div class="post_content">
          <table id="example" class="display" cellspacing="0" width="96%">
				<thead>
					<tr>
						<th width="23"> BIL</th>
						 <th width="53"> Name </th>
                         <th width="90"> Username </th>
                         <th width="88"> Password </th>
						 <th width="88"> No Phone </th>
						 <th width="88"> I.C No </th>
						 <th width="88"> Student Id </th>
						 <th width="88"> Gender </th>
						 <th width="88"> Batch In-take </th>
						 <th width="88"> Address </th>
						 <th width="88"> Course </th>
                         <th width="119"> Date Register </th>
						 <th width="119"> Action </th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
					<?php
			$sql ="select * from maklumat_pelajar where role = '2'ORDER BY `maklumat_pelajar`.`nama` ASC";
			 
			$result = mysqli_query($database,$sql);
			$count = 1;
							if ((mysqli_num_rows($result)== 0))
									{
										?>
                                        
                                        <td colspan="7" style="text-align:center"> Tiada aduan yang Dibuat</td>
                                        </tr>
                                        
                                        <?php
									}
									else{
										while($row = mysqli_fetch_array($result))
										{ 
										?>
										<td style="text-align:center" > <?php echo $count; ?> </td>
										<td style="text-align:center" > <?php echo $row['nama']; ?></td>
                                        <td style="text-align:center" > <?php echo $row['username']; ?> </td>
                                        <td style="text-align:center" > <?php echo $row['password']; ?> </td>
                                        <td style="text-align:center" > <?php echo $row['no_phone']; ?> </td>
                                        <td style="text-align:center" > <?php echo $row['noic']; ?> </td>
                                        <td style="text-align:center" > <?php echo $row['no_ndp']; ?> </td>
                                        <td style="text-align:center" > <?php echo $row['jantina']; ?> </td>
                                        <td style="text-align:center" > <?php echo $row['sesi']; ?> </td>
                                        <td style="text-align:center" > <?php echo $row['alamat']; ?> </td>
                                        <td style="text-align:center" > <?php echo $row['kursus']; ?> </td>
                                        <td style="text-align:center" > <?php echo $row['date_register']; ?> </td>
										<td style="text-align:center"> 
										<a href="edit_user.php?id=<?php echo $row['id'];?>">
                                        <img src="../images/pencil.png" width="25" height="25" /></a>&nbsp;&nbsp;&nbsp; 
                    					<a href="../process/delete_user.php?id=<?php echo $row['id'];?>">
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
