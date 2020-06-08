<?php session_start();?>
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
history.forward();
</script>
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
function checkForm(TheForm) 
{
if (TheForm.userid.value.length == 0) {
   alert("enter useridid");
   return false;
  }
  if (TheForm.oldpwd.value.length == 0) {
   alert("enter old password");
   return false;
   }
   if (TheForm.newpwd.value.length == 0) {
   alert("Enter New Password");
   return false;
   }
   
   
   return true;
   }
</script>

</head>
<body>
<div align="center">
  <table border="5" cellpadding="0" cellspacing="0" style="border-collapse: collapse;margin-top:5px" width="740" bgcolor="#EABE94" bordercolor="#DCDBDB">
    <tr>
      <td><table border="0" cellpadding="10" style="border-collapse: collapse"  background="images/6.jpg" height="180px" width="865px">
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
    <td><table border="1" cellpadding="6" style="border-collapse: collapse" width="100%">
        <tr>
         <td align="center" height="350" valign="top">
		   <form action="" method="post" onSubmit="return checkForm(this)">
		<table width="731" align="center" cellpadding="4" cellspacing="4" background="images/graphics (41).jpg">
		<h2 align="left">Change Password</h2>
		<tr>
        <td width="77">&nbsp;</td>
        <td width="154"><font face="Times New Roman, Times, serif" size="+1" color="#990000">User Name </font></td>
        <td width="260"><input name="userid" type="text" size="35" value="<?php echo $_SESSION["name"];?>" class="search_input" readonly/></td>
        <td width="186" rowspan="4" align="right"><img src="images/reset.png" width="151" height="175"></td>
		</tr>
		<tr>
    	<td>&nbsp;</td>
    	<td><font face="Times New Roman, Times, serif" size="+1" color="#990000">Old Password</font></td>
    	<td>
		<input name="oldpwd" type="text" size="35" value="<?php echo $_SESSION["pwd"];?>"  class="search_input" readonly/></td>
	    </tr>
		<tr>
	    <td>&nbsp;</td>
    	<td><font face="Times New Roman, Times, serif" size="+1" color="#990000" >New Password</font></td>
    	<td><input name="newpwd" type="password" size="35" class="search_input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" /></td>
	    </tr>
		<tr><td align="center">&nbsp;</td>
		  <td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT" class="greenButton"/>
&nbsp;&nbsp;
<input type="reset" name="clear" value="CLEAR" class="greenButton"/></td>
		  </tr>
		</table>
		</form>
		<?php
		if(isset($_POST["submit"]))
		{
		 include("db.php");
		 $id=$_POST["userid"];
		 $pwd=$_POST["oldpwd"];
		 $new=$_POST["newpwd"];
		 $q="update Doctor set Pwd='$new' where Uid='$id'";
		  $res=mysql_query($q);
			 if(!$res)
			{
			?>
			<script language="javascript">alert("Cannot Updated");</script>
			<?php
			}
			else
			{
			?>
			<script language="javascript">alert("Password Updated Successfully");</script>
			<?php
			}
		
		}	
		?>
 		   </td>
		   
        </tr>
				
      </table></td>
  </tr>
  </table>
</div>
</body>
</html>
