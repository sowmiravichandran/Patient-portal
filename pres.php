<?php 
session_start();
?>
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
<?php
error_reporting(0);
include("db.php");
include "function.php";
?>
<body>
<div align="center">

  <table border="5" cellpadding="0" cellspacing="0" style="border-collapse: collapse;margin-top:5px" width="840"  bgcolor="#EABE94" bordercolor="#DCDBDB">
    <tr>
      <td>
<table border="0" cellpadding="10" style="border-collapse: collapse" background="images/6.jpg"height="180px" width="865px">
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>  </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="6" style="border-collapse:collapse;" width="100%">
        <tr>
         <td><div id="menu" style="margin-left:220px">
              <ul class="menu">

				<li><a href="phapwd.php" ><span>ChagePwd</span></a></li>
                <li><a href="pres.php"><span>Prescription</span></a></li>
				<li><a href="index.php"><span>Logout</span></a></li>

                </ul>
            </div>
            <div id="copyright"><a href="http://apycom.com/"></a></div></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td valign="top">
	
	<table border="1" cellpadding="6" style="border-collapse: collapse" width="100%" height="248" >
        <tr>
          <td height="46"  valign="top" colspan="8">
              
			<h2>Doctor's Prescription </h2>			</td></tr>
			<tr>
			  <th width="12%" height="52" align="center"><strong>Patient</strong></th>
			  <th width="12%" align="center"><strong>Doctor</strong></th>
			  <th width="12%" align="center"><strong>Date</strong></th>
			  <th width="49%" align="center"><strong>Prescription</strong></th>
		      <th width="15%" align="center">Action</th>
		  </tr>
			
			<?php
			
			//echo $_SESSION['pname'];
			
		  $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit =5;
		
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`treatment` ";
		$where = "Tstatus = 'Pending'";
		
$sqlup="Select * from {$statement}
        where {$where} order by Tid desc LIMIT {$startpoint},{$limit}";
	$we=mysql_query($sqlup);
			
			while($res=mysql_fetch_object($we))
			{
			?>
			<tr>
			  <td height="71" align="center"><?php echo $res->Tpatient; ?></td>
			  <td height="71" align="center"><?php echo $res->Tdoctor; ?></td>
			  <td align="center"><?php echo $res->Tdate; ?></td>
			  <td align="center"><?php echo $res->Tpres; ?></td>
		      <td align="center">
			<a href="pres2.php?id=<?php echo $res->Tid; ?>&amp;Mode=Edit" style="text-decoration:none">
			   <input name="button" type="button" value="VIEW" class="greenButton" /> </a>
			  </td>
		  </tr>
			  <?php
			}
			?>
				
		<tr align="center">
		  <td height="32" colspan="12"><?php  echo pagination($statement,$where,$limit,$page);?></td>
		  </tr>
		
      </table></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr align="center">
		  <td><strong>Patient Portal System</strong> </td>
		</tr>
  </table>
</div>
</body>
</html>
