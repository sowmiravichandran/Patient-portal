
<html>
<head>
<title>MTP & TS</title>
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
<?php
error_reporting(0);
if($_GET['Mode'] =="Delete") {
include("db.php");
	$sqldel="Delete from feedback
	where SNo='".$_REQUEST['id']."' ";
	//echo $sqldel;
	//exit;
	mysql_query($sqldel);
	
    
	echo "<meta http-equiv='refresh' content='0;url=feed.php'>";
	}

?>
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
          <td height="254" align="left" valign="top">
		   <form action="" method="post" name="testform" onSubmit="return checkForm(this)">
		     <strong><a href="docdetails.php" style="text-decoration:none"></a></strong>
		     <table align="center" width="100%" background="images/graphics (41).jpg" height="40" >
				<tr >
				
				<td height="34" colspan="9" align="center">	<h2>Feedbacks</h2></td></tr>
                       
			    </table>
					   <table border="1" cellpadding="6" style="border-collapse: collapse" width="100%">
					   <tr style="background-color:#999999;color:#FFFFFF">
<td width="10%" height="40" align="center"><strong>Kind Of<br>
                          Feedback
</strong></td>
                        <td width="9%" align="center"><strong>About</strong></td>
                        <td width="17%" align="center"><strong>Comments</strong></td>
                        <td width="12%" align="center"><strong>Name</strong></td>
                        <td width="8%" align="center"><strong>Mobile</strong></td>
                        <td width="12%" align="center"><strong>Place</strong></td>
                        <td width="14%" align="center"><strong>Email</strong></td>
                        <td width="9%" align="center"><strong>Date</strong></td>
                    <!--    <td width="9%" align="center"><strong>ACTION</strong></td>-->
                      </tr>
					  
	  <?php
	
include("db.php");
include "function.php";

   $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit =5;
		
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`feedback` ";
		$where = "`SNo` like '%'";
		
$sqlup="Select * from {$statement}
        where {$where} ORDER BY SNo desc LIMIT {$startpoint},{$limit}";

	$we=mysql_query($sqlup);
	
	while($res=mysql_fetch_object($we))
 	{
?>				  
                      <tr>
                        <td align="center"><?php echo $res->KindofCom; ?></td>
                        <td align="center"><?php echo $res->Aboutus; ?></td>
                        <td align="center"><?php echo $res->Comments; ?></td>
                        <td align="center"><?php echo $res->Name; ?></td>
                        <td align="center"><?php echo $res->Mobile; ?></td>
                        <td align="center"><?php echo $res->Place; ?></td>
                        <td align="center"><?php echo $res->Email; ?></td>
                        <td align="center"><?php echo $res->Dt; ?></td>
                       
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
			<tr align="center">
		  <td><strong>Copy Rights @ 2017 All Rights Reserved</strong> </td>
		</tr>
      </table></td>
  </tr>
  </table>
</div>
</body>
</html>
