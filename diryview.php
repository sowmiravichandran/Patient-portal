
<html>
<head>
<title>Patient portal</title>
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
        <td><div id="menu" style="margin-left:50px">
              <ul class="menu">
                
                <li><a href="emppwd.php" class="parent"><span>ChagePwd</span></a></li>
                <li><a href="bloodview.php"><span>Blood</span></a></li>
				<!--<li><a href="eye.php"><span>Eye</span></a></li>-->
				<li><a href="diryview.php"><span>Emergency Directory</span></a></li>
				<li><a href=""><span>Labtest</span></a>
				<div>
                    <ul>
                      <li><a href="bloodtest.php"><span>BloodTest</span></a> </li>
                   <!--   <li><a href="urinetest.php"><span>Urine Test</span></a> </li>
					  <li><a href="stooltest.php"><span>StoolTest</span></a> </li>-->
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
    <td><table border="1" cellpadding="6" style="border-collapse: collapse" width="100%">
        <tr>
          <td height="343" align="left" valign="top">
		   <form action="" method="post" name="testform" onSubmit="return checkForm(this)">
		 
		     <table align="center" width="100%" background="images/graphics (41).jpg" height="40" >
				<tr >
				
				<td height="34" colspan="9" align="center">	<h2>Emergency Directory</h2></td></tr>
                       
			    </table>
					   <table border="1" cellpadding="6" style="border-collapse: collapse" width="100%">
					   <tr style="background-color:#999999;color:#FFFFFF">
                        <td width="8%" height="40" align="center"><strong>SERVICE</strong></td>
                        <td width="14%" align="center"><strong>CONTACT</strong></td>
                        <td width="9%" align="center"><strong>WEBSITE</strong></td>
                        <td width="10%" align="center"><strong>ACTION</strong></td>
                      </tr>
					  
	  <?php
	
include("db.php");
include "function.php";

   $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit =10;
		
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`directory` ";
		$where = "`dir_id` like '%'";
		
$sqlup="Select * from {$statement}
        where {$where} ORDER BY dir_name asc LIMIT {$startpoint},{$limit}";

	$we=mysql_query($sqlup);
	
	while($res=mysql_fetch_object($we))
 	{
?>				  
                      <tr>
                        <td align="center"><?php echo $res->dir_name; ?></td>
                        <td align="center"><?php echo $res->dir_con; ?></td>
                        <td align="center"><?php echo $res->dir_site; ?></td>
                                           <td align="center">
<a href="diry.php?id=<?php echo $res->dir_id  ?>&amp;Mode=Edit">
<img src="images/editform.png" width="25" height="25" /></a> 
<img src="images/space.png" /> 
<a href="diry.php?id=<?php echo $res->dir_id  ?>&Mode=Delete" onClick="return confirm(' Are You Sure To Delete? ');" > 
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
