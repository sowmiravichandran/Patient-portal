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
function checkForm(TheForm) 
{
if (TheForm.newpwd.value.length == 0) {
   alert("enter new password");
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
                      <li><a href="urinetest.php"><span>Urine Test</span></a> </li>
					  <li><a href="stooltest.php"><span>StoolTest</span></a> </li>
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
      
      <td height="337" valign="top"><form action="" method="post" onSubmit="return checkForm(this)">
           <table width="768" align="center" cellpadding="4" cellspacing="4" background="images/graphics (41).jpg">
		   <h2>Change Password</h2>
            <tr>
              <td width="126">&nbsp;</td>
              <td width="168"><font face="Times New Roman, Times, serif" size="+1" color="#990000">User Name </font></td>
              <td width="232"><input name="userid" type="text" size="35" value="<?php echo $_SESSION["name"];?>" class="search_input" readonly/></td>
              <td width="188" rowspan="4" align="right"><img src="images/reset.png" width="151" height="175"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">Old Password </font></td>
              <td><input name="oldpwd" type="text" size="35" value="<?php echo $_SESSION["pwd"];?>"  class="search_input" readonly/></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">New Password </font></td>
              <td><input name="newpwd" type="password" size="35" class="search_input"  /></td>
              </tr>
            <tr>
              <td align="center">&nbsp;</td>
              <td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT" class="greenButton" />
&nbsp;&nbsp;
<input type="reset" name="clear" value="CLEAR" class="greenButton" /></td>
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
		 $q="update Employee set Pwd='$new' where EId='$id'";
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
		?>      </td>
      </tr>
      		<tr align="center">
		  <td><strong>Patient Portal System</strong> </td>
		</tr>
    </table></td>
  </tr>
  </table>
</div>
</body>
</html>
