<html>
<head>
<title>MTP & TS</title>
<?php error_reporting(0);?>
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
 if (TheForm.empname.value.length == 0) {
   alert("Enter Employee Name");
   return false;
  }
  if (TheForm.dob.value.length == 0) {
   alert("Enter Date Of Birth");
   return false;
  }
  if (TheForm.qualification.value.length == 0) {
   alert("Enter Position");
   return false;
  }
  if (TheForm.mobileno.value.length <= 9) {
   alert("Enter Mobile No");
   return false;
  }
   if (TheForm.mobileno.value.length >= 11) {
   alert("Enter Mobile No");
   return false;
  }
  if (TheForm.address.value.length == 0) {
   alert("Enter Address");
   return false;
  }
  if (TheForm.salary.value.length == 0) {
   alert("Enter The Salary");
   return false;
  }
  if (TheForm.userid.value.length == 0) {
   alert("Enter The User Id");
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
    <td><table border="1" cellpadding="0" style="border-collapse: collapse" width="100%">
        <tr>
          <td>
		   <form action="" method="post" name="testform" onSubmit="return checkForm(this)">
		  
                    <strong><a href="empview.php" style="text-decoration:none">View</a></strong>
                    <table align="center" width="800" background="images/graphics (41).jpg" height="400">
					<tr><td colspan="4" align="center"><h2>
					 
                      Employee Entry</h2></td>
					  </tr>
                        <tr>
						<td width="246">&nbsp;</td>
                        <td width="149"><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Employee Name</font></label></td>
                        <td width="216">
						<input type="text" name="empname" size="30" class="search_input" onKeyPress="return onKeyPressBlockNumbers(event);" /></td>
						<td width="169">&nbsp;</td>
                      </tr>
                      <tr>
					  <td width="246">&nbsp;</td>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Gender</font></label></td>
                        <td><input type="radio" name="gender" value="Male" checked="checked"/>
                          Male
                          <input type="radio" name="gender" value="Female"/>
                          Female</td>
						  <td width="169">&nbsp;</td>
                      </tr>
                      <tr>
					  <td width="246" rowspan="5"><img src="images/emp.png" width="184" height="205"></td>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">DateOf Birth</font></label></td>
                        <td><input type="text" name="dob" size="30" class="search_input" /></td>
                     <td width="169" rowspan="5"><img src="images/symble.png" width="167" height="205"></td>
					  </tr>
                      <tr>
					  <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Position</font></label></td>
                        <td><select  name="qualification" class="search_input" onKeyPress="return onKeyPressBlockNumbers(event);">
						<option value="">Select Position</option>
						<option value="Receptionist">Receptionist</option>
						<option value="Nurse">Nurse</option>						
						<option value="Blood Test Lab">Blood Test Lab</option>
						<option value="Urine Test Lab">Urine Test Lab</option>
						<option value="Stool Test Lab">Stool Test Lab</option>
						</select></td>
					  </tr>
                      <tr>
					  <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Mobile no</font></label></td>
                        <td><input type="text" name="mobileno" size="30" onKeyPress="return num(event)" class="search_input" 
						/></td>
					  </tr>
                      <tr>
					  <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Address</font></label></td>
                        <td><textarea name="address" rows="2" cols="23" class="search_input"></textarea></td>
                      </tr>
                      <tr>
					  <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Salary</font></label></td>
                        <td><input type="text" name="salary" size="30" onKeyPress="return num(event)" class="search_input"
						value=""/></td>
					  </tr>
                      <tr>
					  <td width="246">&nbsp;</td>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">User Name</font></label></td>
                        <td><input type="text" name="userid" size="30" class="search_input" value=""/></td>
                     <td width="169">&nbsp;</td> 
                      </tr>
                      <tr>
					  <td width="246">&nbsp;</td>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Password</font></label></td>
                        <td><input type="password" name="password" size="30" class="search_input" value=""/></td><td width="169">&nbsp;</td>
                      </tr>
                      <tr>
					  <td colspan="4"  align="center"><input type="submit" 
						name="submit" value="Add" class="greenButton"/>&nbsp;&nbsp;&nbsp;                          
                        <input type="reset" name="clear" value="CLEAR" class="greenButton" /></td>
                      </tr>
                    </table>
              </form>
                  <?php
			if(isset($_POST["submit"]))
			{
             include("db.php");
			 $id=$_POST["empid"];
			 $name=$_POST["empname"];
			 $gender=$_POST["gender"];
			 $dob=$_POST["dob"];
			 $qu=$_POST["qualification"];
			 $mobile=$_POST["mobileno"];
			 $ad=$_POST["address"];
			 $salary=$_POST["salary"];
			 $userid=$_POST["userid"];
			 $pwd=$_POST["password"];
$q="insert into employee(EmpName,Gend,DOB,Quali,Mobi,Addr,Sala,EId,Pwd,Dt)values('$name','$gender','$dob','$qu','$mobile','$ad','$salary','$userid','$pwd',CURDATE())";
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
                  <script language="javascript">alert("Registration Successfull");</script>
                  <?php
			}
		
				  echo "<meta http-equiv='refresh' content='0;url=empview.php'>";
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
