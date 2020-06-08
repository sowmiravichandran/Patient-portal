<?php session_start(); 
?>

<html>
<head>
<title>MTP & TS</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script language="JavaScript" src="calendar_us.js"></script>
<link rel="stylesheet" href="calendar.css">
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
<?php
if($_GET['Mode'] =="Edit") {
	 include("db.php");
$q="select * from appoinment where AId = '".$_REQUEST['id']."'";
			 $res=mysql_query($q);
			 $no=mysql_fetch_object($res);	
	
}
?>
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
    <td><table border="0" cellpadding="6" style="border-collapse: collapse" width="100%">
        <tr>
          <td><div id="menu" style="margin-left:100px">
              <ul class="menu">
                
                <li><a href="viewpatient.php"><span>View Patient</span></a></li>
				<li ><a href="feedback.php"><span>Feedback</span></a></li>
                <li><a href="chat.php"><span>Chatting</span></a></li>
				<li><a href="changepwd.php" class="parent"><span>ChangePwd</span></a></li>
				<li><a href="index.php"><span>Logout</span></a></li>
								 
              </ul>
            </div>
            <div id="copyright"><a href="http://apycom.com/"></a></div></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table border="1" cellpadding="6" style="border-collapse:collapse" width="100%">
        <tr>
       
		   <td align="center">
		   <form  action="#" method="post" name="testform" enctype="multipart/form-data">
                <fieldset>
                <legend><font face="Times New Roman, Times, serif" size="+1" color="#FF0000">Patient Profile</font></legend>
				<table width="100%">
			<tr>
			  <td width="15%">Date </td>
			  <td width="53%"><input type="text" name="Tdate" value="<?php echo $no->AppDt; ?>" readonly>
			    <input type="hidden" name="Tid" value="<?php echo $no->AId; ?>" readonly>			    </td>
			  <td width="12%">Gender</td>
			  <td width="20%"><input type="text" name="Tgender" value="<?php echo $no->Gender; ?>" readonly></td>
			</tr>
			<tr>
			  <td>Name</td>
			  <td><input type="text" name="Tname" value="<?php echo $no->AName; ?>" readonly></td>
			  <td>From</td>
			  <td><input type="text" name="Tfrom" value="<?php echo $no->Place; ?>" readonly></td></tr>
			<tr>
			  <td colspan="4" align="center">
			Assign To&nbsp;: 
			<select name="Ttrans">
			<option value="<?php echo $_SESSION['dname']; ?>"><?php echo $_SESSION['spec'].'-'.$_SESSION['dname']; ?></option>
			<?php
			include "db.php";
	$sel="select * from doctor where DName !='".$_SESSION['dname']."'  order by DName";

	$from=mysql_query($sel);
	while($doc=mysql_fetch_object($from))
	{
	?>
	<option value="<?php echo $doc->DName; ?>"><?php echo $doc->Spec.'-'.$doc->DName; ?></option>
	<?php } ?>
			  </select>
			</td></tr>						
				</table>
			
                </fieldset>
                    <fieldset>
                    <legend><font face="Times New Roman, Times, serif" size="+1" color="#FF0000">Action</font></legend>
					<table width="100%" border="0">
  <tr>
    <td width="17%">Prescription</td>
    <td rowspan="4"><textarea name="Tpres" style="height:100;width:250" ></textarea></td>
    <td>Instruction</td>
    <td rowspan="4"><textarea name="Tins" style="height:100;width:250"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Test</td>
    <td width="35%"><input name="Ttest1" type="checkbox" value="Blood">
	&nbsp;Blood Test </td>
    <td width="15%">Test Date </td>
    <td width="33%"><input type="text" name="Ttdate"  size="30"/>
                          <script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'testform',
		// input name
		'controlname': 'Ttdate'
	});

	</script>      </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="Ttest2" type="checkbox" value="Urine">
	&nbsp;Urine Test</td>
    <td>Test Description </td>
    <td rowspan="2"><textarea name="Ttdesc" style="width:250"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="Ttest3" type="checkbox" value="Stool">
      &nbsp;Stool Test </td>
    <td>&nbsp;</td>
    </tr>
<tr><td colspan="4" align="center"><hr><input name="submit" type="submit" value="SUBMIT" class="greenButton">&nbsp;</td></tr>
</table>

                    </fieldset>

			  </form>
					  <?php 
if(isset($_POST["submit"]))
{
 include("db.php");
if($_POST['Ttrans']==$_SESSION['dname']) 
{
$delete="DELETE FROM `appoinment` WHERE `AId` = '".$_POST['Tid']."' "; 
mysql_query($delete);
//+echo $delete;
$insert="INSERT INTO `treatment`(`Tpatient` ,
								 `Tgender` ,
								`Tdoctor` ,
								`Tpres` ,
								`Tins` ,
								`Ttest1`,
								`Ttest2`,
								`Ttest3` ,
								`Ttdate` ,
								`Ttdesc`,
								`Tdate`,
								`Tstatus`
								)
					VALUES ('".$_POST['Tname']."', 
							'".$_POST['Tgender']."', 
							'".$_SESSION['dname']."', 
							'".$_POST['Tpres']."', 
							'".$_POST['Tins']."', 
							'".$_POST['Ttest1']."', 
							'".$_POST['Ttest2']."', 
							'".$_POST['Ttest3']."', 
							'".$_POST['Ttdate']."', 
							'".$_POST['Ttdesc']."', 
							'".$_POST['Tdate']."', 
							'Pending')";
							//echo $insert;
						//	exit;
mysql_query($insert);
echo "<meta http-equiv='refresh' content='0;url=viewpatient.php'>";
}
else
{
if($_POST['Tpres'] != '')
{
$update="UPDATE `appoinment` SET `DName` = '".$_POST['Ttrans']."' WHERE `AId` ='".$_POST['Tid']."'"; 
mysql_query($update);
$insert="INSERT INTO `treatment`(`Tpatient` ,
								 `Tgender` ,
								`Tdoctor` ,
								`Tpres` ,
								`Tins` ,
								`Ttest1`,
								`Ttest2`,
								`Ttest3` ,
								`Ttdate` ,
								`Ttdesc`,
								`Tdate`,
								`Tstatus`
								)
					VALUES ('".$_POST['Tname']."', 
							'".$_POST['Tgender']."', 
							'".$_SESSION['dname']."', 
							'".$_POST['Tpres']."', 
							'".$_POST['Tins']."', 
							'".$_POST['Ttest1']."', 
							'".$_POST['Ttest2']."', 
							'".$_POST['Ttest3']."', 
							'".$_POST['Ttdate']."', 
							'".$_POST['Ttdesc']."', 
							'".$_POST['Tdate']."', 
							'Pending')";
mysql_query($insert);
echo "<meta http-equiv='refresh' content='0;url=viewpatient.php'>";
}
else
{
$update="UPDATE `appoinment` SET `DName` = '".$_POST['Ttrans']."' WHERE `AId` ='".$_POST['Tid']."'"; 
//echo $update;
mysql_query($update);
echo "<meta http-equiv='refresh' content='0;url=viewpatient.php'>";
}
	}
		}
			?>		   </td>
        </tr>
					<tr align="center">
		  <td colspan="9"><strong>Copy Rights @ 2017 All Rights Reserved</strong> </td>
		</tr>
      </table></td>
  </tr>
  </table>
</div>
</body>
</html>
