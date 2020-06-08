
<html>
<head>
<title>MTP & TS</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link type="text/css" href="menu.css" rel="stylesheet" />
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
<script>
window.oncontextmenu = noRightClick;
window.onkeypress = noRightClick;
function noRightClick (e) {
if(e.which==3) return false;
}
</script>
<script language="javascript">
function num(e)
{
 var a=e.charCode?e.charCode:e.keyCode;
 if(a!=8)
 {
  if(a<48 || a>57)
  {
   return false;
  }
 }
}
</script>
<script language="javascript">
function onKeyPressBlockNumbers(e)
{
	var key = window.event ? e.keyCode : e.which;
	var keychar = String.fromCharCode(key);
	reg = /\d/;
	return !reg.test(keychar);
}

</script><script language="javascript">
function al()
{
if(document.getElementById('pos').value.length<6)
{
alert("Postal code character minimum 6 numbers");
}
}

</script>
<script language="javascript">
function checkForm(TheForm) 
{

if (TheForm.docname.value.length == 0) {
   alert("Enter The Doctor Name");

  return false;
  }
  if (TheForm.dob.value.length == 0) {
   alert("Enter The Date Of Birth");

   return false;
  }
  if (TheForm.qualification.value.length == 0) {
   alert("Enter The Qualification");

   return false;
  }
  if (TheForm.expe.value.length == 0) {
   alert("Enter Experience");
   return false;
  }
  if (TheForm.spec.value.length == 0) {
   alert("Enter Doctor Specialist In");
   return false;
  }
  
  if (TheForm.peraddress.value.length == 0) {
   alert("Enter The Permenant Address");
   return false;
  }
  if (TheForm.mobileno.value.length <= 9) {
   alert("Enter The Valid Mobile No");
   return false;
  }

  if (TheForm.mobileno.value.length >= 11) {
   alert("Enter The Valid Mobile No");
   return false;
  }

  if (TheForm.salary.value.length == 0) {
   alert("Enter The Salary");
   return false;
  }
   if (TheForm.userid.value.length == 0) {
   alert("Enter The Userid");
   return false;
  }
  if (TheForm.password.value.length == 0) {
   alert("Enter The Password");
   return false;
  }
   return true;
   }
</script>

</head>
<?php
if($_GET['Mode'] =="Edit") {
include("db.php");
	$sqlup="Select * from doctor
	where DId='".$_REQUEST['id']."' ";
	//echo $sqlup;
	//exit;
	$we=mysql_query($sqlup);
	$res=mysql_fetch_object($we);
}

if($_GET['Mode'] =="Delete") {
include("db.php");
	$sqldel="Delete from doctor
	where DId='".$_REQUEST['id']."' ";
	//echo $sqldel;
	//exit;
	mysql_query($sqldel);
	
    
	echo "<meta http-equiv='refresh' content='0;url=docview.php'>";
	}

?>
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
          <td align="left">
		   <form action="" method="post" name="testform" onSubmit="return checkForm(this)">
                    <strong><a href="docview.php" style="text-decoration:none">View</a></strong>
                    <table align="center" width="800" background="images/graphics (41).jpg" height="500">
				<tr><td colspan="4" align="center">	<h2>Doctor Entry</h2></td>
				  </tr>
                       <tr>
                        <td width="217">&nbsp;</td>
                        <td width="135"><font face="Times New Roman, Times, serif" size="+1" color="#990000">Doctor Name</font></td>
                        <td width="194">
						<input type="text" name="docname" size="30" class="search_input" onKeyPress="return onKeyPressBlockNumbers(event);" value="<?php echo $res->DName; ?>"/>
						<input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
                         <input type="hidden" name="Mode" id="Mode" value="<?php echo $_REQUEST['Mode']; ?>"></td>
                        <td width="181">&nbsp;</td>
                      </tr>
                      <tr>
                        <td><label></label></td>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">Gender</font></td>
                        <td><input type="radio" name="gender" value="male" checked="checked" />
                          Male
                 <input type="radio" name="gender" value="female" <?php if($res->Gend=='Female'){ ?> checked="checked"<?php } ?> />
                          Female</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td rowspan="7"><label></label>
                          <label></label>                          
                          <label></label>                          
                          <label></label>                          
                          <label></label>                          
                        <label></label>                          <label><img src="images/Male_Doctor.png" width="167" height="205"></label></td>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">DateOf Birth</font></td>
                        <td><input type="text" name="dob" size="30" class="search_input" value="<?php echo $res->DOB; ?>"/></td>
                        <td rowspan="7"><img src="images/symble.png" width="167" height="205"></td>
                      </tr>
                      <tr>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">Qualification</font></td>
                        <td><input type="text" name="qualification" size="30" class="search_input" onKeyPress="return onKeyPressBlockNumbers(event);" value="<?php echo $res->Quali; ?>"/></td>
                      </tr>
                      <tr>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">Experience</font></td>
                        <td><input type="text" name="expe" size="30" onKeyPress="return num(event)" class="search_input" 
						value="<?php echo $res->Exp; ?>"/></td>
                      </tr>
                      <tr>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">Specialist</font></td>
                        <td><input type="text" name="spec" size="30" class="search_input" onKeyPress="return onKeyPressBlockNumbers(event);"  value="<?php echo $res->Spec; ?>"/></td>
                      </tr>
                      
                      <tr>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">PresAddress</font></td>
                        <td><input type="text" name="presaddress" size="30" class="search_input" onKeyPress="return onKeyPressBlockNumbers(event);" value="<?php echo $res->PreAdd; ?>"/></td>
                      </tr>
                      <tr>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">PerAddress</font></td>
                        <td><input type="text" name="peraddress" size="30"  class="search_input" onKeyPress="return onKeyPressBlockNumbers(event);" value="<?php echo $res->PerAdd; ?>"/></td>
                      </tr>
                      <tr>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">Mobile No</font></td>
                        <td><input type="text" name="mobileno" size="30" onKeyPress="return num(event)" class="search_input"
						value="<?php echo $res->Mob; ?>"/></td>
                      </tr>
                      <tr>
                        <td><label></label></td>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">Salary</font></td>
                        <td><input type="text" name="salary" size="30" onKeyPress="return num(event)" class="search_input"
						value="<?php echo $res->Salary; ?>"/></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><label></label></td>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">User ID</font></td>
                        <td><input type="text" name="userid" size="30" class="search_input" value="<?php echo $res->UId; ?>"/></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><label></label></td>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">Password</font></td>
                        <td><input type="password" name="password" size="30" class="search_input" value="<?php echo $res->Pwd; ?>"/></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="4" align="center">
						<input type="submit" 
						name="<?php if($_GET['Mode'] =="Edit") { ?>update<?php } else {?>submit<?php } ?>" 
						value="<?php if($_GET['Mode'] =="Edit") { ?>UPDATE<?php } else {?>SUBMIT<?php } ?>" class="greenButton"/>                          &nbsp;&nbsp;&nbsp;
                        <input type="reset" name="clear" value="CLEAR"  class="greenButton"/></td>
                      </tr>
                </table>
              </form>
                  <?php
            if(isset($_POST["submit"]))
			{
			 include("db.php");
			 $id=$_POST["docid"];
			 $name=$_POST["docname"];
			 $_SESSION["docname"]=$name;
			 $gender=$_POST["gender"];
			 $dob=$_POST["dob"];
			 $qu=$_POST["qualification"];
			 $exp=$_POST["expe"];
			 $spec=$_POST["spec"];
			$pres=$_POST["presaddress"];
			 $per=$_POST["peraddress"];
			 $mo=$_POST["mobileno"];
			 $sa=$_POST["salary"];
			 $userid=$_POST["userid"];
			 $pwd=$_POST["password"];
			// $date=$_POST["testinput"];
			 $q="insert into Doctor(DName,Gend,DOB,Quali,Exp,Spec,PreAdd,PerAdd,Mob,Salary,UId,Pwd,Dt)values('$name','$gender','$dob','$qu','$exp','$spec','$pres','$per','$mo','$sa','$userid','$pwd',CURDATE())";
			 $res=mysql_query($q);
			 if(!$res)
			 {
			 ?>
                  <script language="javascript">alert("Cannot Registered");</script>
                  <?php
			 }
		     else
			 {
			 ?>
                  <script language="javascript">alert("Registration Succesfull");</script>
                  <?php	
			 }
			}
			elseif(isset($_POST["update"]))
			{
			include("db.php");
			$q=" UPDATE `doctor` SET `DName` = '".$_POST["docname"]."',
						`Gend` = '".$_POST["gender"]."',
						`DOB` = '".$_POST["dob"]."',
						`Quali` = '".$_POST["qualification"]."',
						`Exp` = '".$_POST["expe"]."',
						`Spec` = '".$_POST["spec"]."',
						`PreAdd` = '".$_POST["presaddress"]."',
						`PerAdd` = '".$_POST["peraddress"]."',
						`Mob` = '".$_POST["mobileno"]."',
						`Salary` = '".$_POST["salary"]."',
						`UId` = '".$_POST["userid"]."',
						`Pwd` = '".$_POST["password"]."',
						`Dt` = '".date('d/m/Y')."' 
				  WHERE `DId` ='".$_REQUEST["id"]."' ";
				  $res=mysql_query($q);
				
				  echo "<meta http-equiv='refresh' content='0;url=docview.php'>";
			}
			?>
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
