
<html>
<head>
<title>Patient</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link type="text/css" href="menu.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="pagination/pagination.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
<style type="text/css">
div#menu {
   margin-top:-8px;
    width:100%;
	margin-left:-5px;
}

</style>
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
<script language="javascript">
history.forward();
</script>


</head>
<body>
<div align="center">
  <table border="5" cellpadding="0" cellspacing="0" style="border-collapse: collapse;margin-top:5px" width="740" bgcolor="#EABE94" bordercolor="#DCDBDB">
    <tr>
      <td><table border="0" cellpadding="10" style="border-collapse: collapse" background="images/6.jpg" height="180px" width="865px">
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="6" style="border-collapse: collapse" width="100%">
        <tr>
         <td><div id="menu"  style="margin-left:100px">
              <ul class="menu">
                <li><a href="docview.php"><span>Doctor</span></a></li>
                <li><a href="empview.php"><span>Employee</span></a></li>
				<li><a href="phaview.php"><span>Pharmacy</span></a></li>
				<li><a href="feed.php"><span>Feedbacks</span></a></li>
				<li><a href="index.php"><span>Logout</span></a></li>
				 
              </ul>
            </div>
            <div id="copyright"><a href="http://apycom.com/"></a></div></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table border="1" cellpadding="6" style="border-collapse: collapse" width="100%">
        <tr>
          <td align="left" valign="top">
		   <form action="" method="post" name="testform" onSubmit="return checkForm(this)">
		     <strong><a href="adddocdetails.php" style="text-decoration:none">Back</a></strong>
		     <table align="center" width="100%" background="images/graphics (41).jpg" height="40" >
				<tr >
				
				<td height="34" colspan="9" align="center">	<h2>Doctors List </h2></td></tr>
                       
			    </table>
					   <table border="1" cellpadding="6" style="border-collapse: collapse" width="100%">
					   <tr style="background-color:#999999;color:#FFFFFF">
                        <td width="8%" height="40" align="center"><strong>ID</strong></td>
                        <td width="14%" align="center"><strong>NAME</strong></td>
                        <td width="9%" align="center"><strong>DOB</strong></td>
                        <td width="12%" align="center"><strong>QUA.</strong></td>
                        <td width="9%" align="center"><strong>EXP.</strong></td>
                        <td width="13%" align="center"><strong>SPEC.</strong></td>
                        <td width="15%" align="center"><strong>MOBILE</strong></td>
                        <td width="10%" align="center"><strong>USER<br>
                        NAME</strong></td>
                        <td width="10%" align="center"><strong>ACTION</strong></td>
                      </tr>
					  
	  <?php
	
include("db.php");
include "function.php";

   $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit =4;
		
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`doctor` ";
		$where = "`DId` like '%'";
		
$sqlup="Select * from {$statement}
        where {$where} ORDER BY DId LIMIT {$startpoint},{$limit}";

	$we=mysql_query($sqlup);
	
	while($res=mysql_fetch_object($we))
 	{
?>				  
                      <tr>
                        <td align="center"><?php echo $res->DId; ?></td>
                        <td align="center"><?php echo $res->DName; ?></td>
                        <td align="center"><?php echo $res->DOB; ?></td>
                        <td align="center"><?php echo $res->Quali; ?></td>
                        <td align="center"><?php echo $res->Exp; ?></td>
                        <td align="center"><?php echo $res->Spec; ?></td>
                        <td align="center"><?php echo $res->Mob; ?></td>
                        <td align="center"><?php echo $res->UId; ?></td>
                        <td align="center">
<a href="docdetails.php?id=<?php echo $res->DId ?>&amp;Mode=Edit">
<img src="images/editform.png" width="25" height="25" /></a> 
<img src="images/space.png" /> 
<a href="docdetails.php?id=<?php echo $res->DId ?>&Mode=Delete" onClick="return confirm(' Are You Sure To Delete? ');" > 
<img src="images/deleteform.png" width="25" height="25" /></a></td>
                      </tr>
					  <?php } ?>
                      <tr></tr>
                      <tr>
                        <td colspan="9" align="left"><?php  echo pagination($statement,$where,$limit,$page);?></td>
                      </tr>
                </table>
              </form>
            </td>
		   
        </tr>
			
      </table></td>
  </tr>
  </table>
</div>
</body>
</html>
