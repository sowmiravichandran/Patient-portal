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
	margin-left:90px;
}

</style>
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
function al()
{
if(document.getElementById('pos').value.length<6)
{
alert("Postal code character minimum 6 numbers");
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
function checkForm(TheForm) 
{
if (TheForm.name.value.length == 0) {
   alert("enter new username");
   return false;
  }
  if (TheForm.age.value.length == 0) {
   alert("enter the age");
   return false;
  }
  if (TheForm.unit.value.length == 0) {
   alert("enter the unit");
   return false;
  }
  if (TheForm.lastdonation.value.length == 0) {
   alert("enter last donation date");
   return false;
  }
  if (TheForm.mobileno.value.length<10) {
   alert("enter valid mobileno");
   return false;
  }
  if (TheForm.mailid.value.length == 0) {
   alert("enter mailid");
   return false;
  }
  if (TheForm.address.value.length == 0) {
   alert("enter the address");
   return false;
  }
   return true;
   }
</script>

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
<body>
<div align="center">
  <table border="5" cellpadding="0" cellspacing="0" style="border-collapse: collapse;margin-top:5px" width="840"  bgcolor="#EABE94" bordercolor="#DCDBDB">
    <tr>
      <td><table border="0" cellpadding="10" style="border-collapse: collapse" background="images/6.jpg" height="180px" width="865px">
    <tr>
      <td><b><font face="Trebuchet MS" size="+2" color="#FFFFFF"></font></b></td>
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
         
		   <td>
		   <form action="" method="post" name="testform" onSubmit="return checkForm(this)">
                    <table align="center" width="385" background="images/graphics (41).jpg" height="200">
					<strong><a href="bloodview.php" style="text-decoration:none">Back</a></strong>
					<th colspan="2"><h3>Blood  recipient details</h3>					  </th>
					<tr>
                      <td width="154"><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Name</font></label></td>
                      <td width="219"><input type="text" name="name" size="30" class="search_input" onKeyPress="return onKeyPressBlockNumbers(event);" /></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Sex</font></label></td>
                        <td><input type="radio" name="gender" value="male" />
                          Male
                          <input type="radio" name="gender" value="female" />
                          Female</td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Age</font></label></td>
                        <td><input type="text" name="age" size="30"  onkeypress="return num(event)" class="search_input"/></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">BloodGroup</font></label></td>
                        <td><select name="blood" class="search_input" >
                            <option value="">-Select One-</option>
                            <option value="A +ve">A +ve</option>
                            <option value="A -ve">A -ve</option>
                            <option value="B +ve">B +ve</option>
                            <option value="B -Ve">B -ve</option>
                            <option value="AB +ve">AB +ve</option>
                            <option value="AB -ve">AB -ve</option>
                            <option value="O +ve">O +ve</option>
                            <option value="O -ve">O -ve</option>
                          </select></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">No of Unit</font></label></td>
                        <td><input type="text" name="unit" size="30" onKeyPress="return num(event)" class="search_input"/></td>
                      </tr>
                      
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Mobileno </font></label></td>
                        <td><input type="text" name="mobileno" size="30" onKeyPress="return num(event)" class="search_input"/></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Emailid</font></label></td>
                        <td><input type="text" name="mailid" size="30"  class="search_input"/></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Address</font></label></td>
                        <td><input type="text" name="address" size="30"  class="search_input"/></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT" class="greenButton" />                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="clear" value="CLEAR" class="greenButton" />                        </td>
                      </tr>
                    </table>
              </form>
                  <?php
			if(isset($_POST["submit"]))
			{
			 include("db.php");
			 $name=$_POST["name"];
			 $gender=$_POST["gender"];
			 $age=$_POST["age"];
			 $blood=$_POST["blood"];
			 $unit=$_POST["unit"];
			
			 $mobile=$_POST["mobileno"];
			 $mail=$_POST["mailid"];
			 $address=$_POST["address"];
			 $date=date('d/m/y');
			 $q=mysql_query("insert into stock(name,sex,age,sbg,unit,mobile,email,address,Dt)values('$name','$gender','$age','$blood','$unit','$mobile','$mail','$address','$date')") or die(mysql_error());
			 
			
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
