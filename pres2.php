<?php session_start();

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

if($_GET['Mode'] =="Edit") {
	 include("db.php");
$q="select * from treatment where Tid = '".$_REQUEST['id']."'";
			 $re=mysql_query($q);
			 $res=mysql_fetch_object($re);	
	
}

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
				<li ><a href="index.php"><span>Logout</span></a></li>

                </ul>
            </div>
            <div id="copyright"><a href="http://apycom.com/"></a></div></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td valign="top">
	
	<table border="0"  style="border-collapse: collapse" width="90%" height="425" align="center">
        <tr>
          <td height="46"  valign="top" colspan="4">
              
			<h2>Prescription Bill </h2>			</td></tr>
			
 <form  action="#" method="post" name="testform" enctype="multipart/form-data">
		<tr align="center">
		  <td width="13%" height="32" align="left">Patient</td>
		  <td width="36%" height="32" align="left">
		  <input type="text" name="Bpatient" readonly value="<?php echo $res->Tpatient ?>">
		  <input type="hidden" name="Btid" readonly value="<?php echo $res->Tid ?>"></td>
		  <td width="11%" height="32" align="left">Gender</td>
		  <td width="40%" height="32" align="left">
		  <input type="text" name="Bgender" readonly value="<?php echo $res->Tgender; ?>"></td>
		</tr>
		<tr align="center">
		  <td height="32" align="left">Doctor</td>
		  <td height="32" align="left">
		  <input type="text" name="Bdoctor" readonly value="<?php echo $res->Tdoctor; ?>"></td>
		  <td height="32" align="left">Date</td>
		  <td height="32" align="left">
		  <input type="text" name="Bdate" readonly value="<?php echo $res->Tdate; ?>"></td>
		  </tr>
		<tr align="center">
		  <td height="32" align="left">&nbsp;</td>
		  <td height="32" colspan="3" align="left">&nbsp;</td>
		  </tr>
		<tr align="center">
		  <td height="32" align="left">Prescription </td>
		  <td colspan="3" rowspan="4" align="left" valign="top">
		  <textarea name="Bpres" style="width:600;height:150" readonly><?php echo $res->Tpres; ?></textarea></td>
		<tr align="center">
		  <td height="32" align="left">&nbsp;</td>
		  </tr>
		<tr align="center">
		  <td height="32" align="left">&nbsp;</td>
		  </tr>
		<tr align="center">
		  <td height="32" align="left">&nbsp;</td>
		  </tr>
		   
		  <tr align="center">
		  <td height="32" align="left">Bill Amount </td>
		  <td colspan="3" rowspan="3" align="left" valign="top">
		  <textarea name="Bamount" style="width:600;height:150" autofocus></textarea></td>
		  </tr>
		  <tr align="center">
		    <td height="32" align="left">&nbsp;</td>
	      </tr>
		  <tr align="center">
		    <td height="32" align="left">&nbsp;</td>
	      </tr>
		  <tr align="center">
		    <td height="32" colspan="4" align="center">
			<input type="submit" name="submit" value="SUBMIT" class="greenButton"></td>
	      </tr>
		  </form>
      </table></td>
  </tr>
  <tr align="center">
		  <td height="33" colspan="5"><strong>Copy Rights @ 2017 All Rights Reserved</strong> </td>
		</tr>
  
  </table>
</div>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
 include("db.php");

$insert="INSERT INTO `phabill` (`Bpatient` ,
								`Bgender` ,
								`Bdoctor` ,
								`Bdate` ,
								`Bpres` ,
								`Bamount` ,
								`Bbilldate` 
								)
					VALUES ('".$_POST['Bpatient']."', 
							'".$_POST['Bgender']."', 
							'".$_POST['Bdoctor']."', 
							'".$_POST['Bdate']."', 
							'".$_POST['Bpres']."', 
							'".$_POST['Bamount']."', 
							'".date('d/m/Y')."')";
							//echo $insert;
						//	exit;
mysql_query($insert);
$update="UPDATE `treatment` SET `Tstatus` = 'Billed' WHERE `Tid` ='".$_POST['Btid']."'"; 
mysql_query($update);
echo "<meta http-equiv='refresh' content='0;url=pres.php'>";
}
?>