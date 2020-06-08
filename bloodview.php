<?php session_start();?>
<html>
<head>
<title>MTP & TS</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
<link rel="stylesheet" type="text/css" href="pagination/pagination.css" />
<style type="text/css">
th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: .7em;
	background: #666;
	color: #FFF;
	padding: 2px 6px;
	border-collapse: separate;
	border: 1px solid #000;
}
</style>

<style type="text/css">
div#menu {
   margin-top:-8px;
    width:100%;
	margin-left:-5px;
}

</style>

<script language="javascript">
history.forward();
</script>
<script>
window.oncontextmenu = noRightClick;
window.onkeypress = noRightClick;
function noRightClick (e) {
if(e.which==3) return false;
}
</script>

</head>
<body>
<div align="center">
  <table border="5" cellpadding="0" cellspacing="0" style="border-collapse: collapse;margin-top:5px" width="840"  bgcolor="#EABE94" bordercolor="#DCDBDB">
    <tr>
      <td>
<table border="0" cellpadding="10" style="border-collapse: collapse" background="images/6.jpg"height="180px" width="865px">
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="6" style="border-collapse:collapse;" width="100%">
        <tr>
           <td><div id="menu" style="margin-left:50px">
              <ul class="menu">
                
                <li><a href="emppwd.php" class="parent"><span>ChagePwd</span></a></li>
                <li><a href="bloodview.php"><span>Blood donors</span></a></li>
				<li><a href="bloodview1.php"><span>Blood recipients</span></a></li>
				<li><a href="diryview.php"><span>Emergency Directory</span></a></li>
				<li><a href=""><span>Labtest</span></a>
				<div>
                    <ul>
                      <li><a href="bloodtest.php"><span>BloodTest</span></a> </li>
                 
                      </ul>
                  </div>
				</li>
				<li class="last"><a href="index.php"><span>Logout</span></a></li>
                </ul>
            </div>
            <div id="copyright"><a href="http://apycom.com/"></a></div></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td>
	<table border="1" cellpadding="6" style="border-collapse: collapse" width="100%" height="213" >
	 <h2 align="center">Blood Donors' Details</h2>
	<strong><a href="newblood.php" style="text-decoration:none">Add Blood Donor details</a></strong><br>
    <strong><a href="newblood1.php" style="text-decoration:none">Add Patients details</a></strong>		  
	 <?php
		   
			include("db.php");
			include "function.php";
				  $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit =5;
		
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`BloodDonation` ";
		$where = "Name like '%'";
		
$sqlup="Select * from {$statement}
        where {$where} order by SNo desc LIMIT {$startpoint},{$limit}";
			$res=mysql_query($sqlup);
			?>
			<tr><th width="40" height="48"><strong>Name</strong></th>
			<th width="27"><strong>Sex</strong></th>
			<th width="27"><strong>Age</strong></th>
			<th width="51"><strong>BGroup</strong></th>
			<th width="27"><strong>Unit</strong></th>
			<th width="56"><strong>LastDon</strong></th>
			<th width="39"><strong>Email</strong></th>
			<th width="56"><strong>Address</strong></th>
			<th width="85"><strong>Date</strong></th>
			</tr>
		<?php
			while($row=mysql_fetch_array($res))
			{
			?>
			  <tr><td><?php echo $row['Name'];?></td>
			  <td><?php echo $row['Sex'];?></td>
			  <td><?php echo $row['Age'];?></td>
			  <td><?php echo $row['SBG'];?></td>
			  <td><?php echo $row['Unit'];?></td>
			  <td><?php echo $row['LDon'];?></td>
			 <td><?php echo $row['Email'];?></td>
			  <td><?php echo $row['Address'];?></td>
			  <td><?php echo $row['Dt'];?></td></tr>
			<?php 
			}
			?>

		    <tr align="center">
		      <td height="48" colspan="9"><?php  echo pagination($statement,$where,$limit,$page);?></td>
	      </tr>
	     
      </table></td>
  </tr>
  </table>
</div>
</body>
</html>
