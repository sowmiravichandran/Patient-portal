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
	margin-left:90px;
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

</script>
<script language="javascript">
function validateForm(){
if(document.ItemList.firstname.value==0)
{
alert("Please Enter Firstname.");
document.ItemList.firstname.focus();
return false;
}
if(document.ItemList.lastname.value==0)
{
alert("Please Enter lastname.");
document.ItemList.lastname.focus();
return false;
}
if(document.ItemList.street.value==0)
{
alert("Please Enter streetname.");
document.ItemList.street.focus();
return false;
}
if(document.ItemList.city.value==0)
{
alert("Please Enter cityname.");
document.ItemList.city.focus();
return false;
}
if(document.ItemList.state.value==0)
{
alert("Please Enter statename.");
document.ItemList.state.focus();
return false;
}
if(document.ItemList.postal.value==0)
{
 alert("Please Enter postalcode.");
document.ItemList.postal.focus();
return false;
}
if(document.ItemList.phoneno.value==0)
{
alert("Please Enter Valid Phone No.");
document.ItemList.phoneno.focus();
return false;
}
if(document.ItemList.mobileno.value.length<10)
{
alert("Please Enter Valid Mobile No.");
document.ItemList.mobileno.focus();
return false;
}
if(document.ItemList.username.value==0)
{
alert("Please Enter User Name.");
document.ItemList.username.focus();
return false;
}
if(document.ItemList.password.value==0)
{
alert("Please Enter Password.");
document.ItemList.password.focus();
return false;
}
return true;
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
function Form(){
if(document.Item.username.value==0)
{
alert("Please Enter Username.");
document.Item.username.focus();
return false;
}
if(document.Item.password.value==0)
{
alert("Please Enter password.");
if(document.Item.password.length<5)
{
 alert("Password Minimum 5 characters");
}
document.Item.password.focus();
return false;
}
return true;
</script>
<script>
$(document).ready(function(){
$('#username').keyup(username_check);
});
	
function username_check(){	
var username = $('#username').val();
if(username == "" || username.length < 4){
$('#username').css('border', '3px #CCC solid');
$('#tick').hide();
}else{

jQuery.ajax({
   type: "POST",
   url: "check.php",
   data: 'username='+ username,
   cache: false,
   success: function(response){
if(response == 1){
	$('#username').css('border', '3px #C33 solid');	
	$('#tick').hide();
	$('#cross').fadeIn();
	}else{
	$('#username').css('border', '3px #090 solid');
	$('#cross').hide();
	$('#tick').fadeIn();
	     }

}
});
}



}

</script>

<style>
#username{
	padding:3px;
	font-size:18px;
	border:3px #CCC solid;
}

#tick{display:none}
#cross{display:none}
	

</style>
<script language="javascript" type="text/javascript" src="jq/jquery.pstrength-min.1.2.js"></script>
<script language="javascript">
$(function() {
$('#pwd').pstrength();
});

</script>
</head>
<body>
<div align="center">
  <table border="5" cellpadding="0" cellspacing="0" style="border-collapse: collapse;margin-top:5px" width="840"  bgcolor="#EABE94" bordercolor="#DCDBDB">
    <tr>
      <td><table border="0" cellpadding="10" style="border-collapse: collapse" background="images/6.jpg"height="180px" width="865px">
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="6" style="border-collapse: collapse" width="100%">
        <tr>
          <td><div id="menu" style="margin-left:60px">
              <ul class="menu">
                <li><a href="index.php" ><span>Home</span></a></li>
                <li><a href="availblood.php"><span>Blood Bank</span></a></li>
          
                <li><a href="feedback1.php"><span>Emergency Directory</span></a></li>
                <li><a href="registration.php"><span>Regisration & Login</span></a></li>
		    </ul>
            </div>
               <div id="copyright"><a href="http://apycom.com/"></a></div></td>
           </td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table border="1" cellpadding="6" style="border-collapse: collapse" width="100%">
        <tr>
          <td valign="top">
		  <form action="" method="post" onSubmit="return validateForm()" name="ItemList">
                    <table align="center">
					<th>Registration form<hr></th>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">First Name</font></label></td>
                        <td><input type="text" name="firstname" size="30" class="search_input" onKeyPress="return onKeyPressBlockNumbers(event);" /></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Last Name</font></label></td>
                        <td><input type="text" name="lastname" size="30" class="search_input" onKeyPress="return onKeyPressBlockNumbers(event);"/></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Street</font></label></td>
                        <td><input type="text" name="street" size="30" class="search_input" /></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">City</font></label></td>
                        <td><input type="text" name="city" size="30" class="search_input" /></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">State</font></label></td>
                        <td><input type="text" name="state" size="30" class="search_input" /></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">PostalCode</font></label></td>
                        <td><input type="text" name="postal" size="30" onKeyPress="return num(event)" class="search_input" id="pos" onBlur="al()"/></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Phone No</font></label></td>
                        <td><input type="text" name="phoneno" size="30" onKeyPress="return num(event)" class="search_input" /></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Mobileno</font></label></td>
                        <td><input type="text" name="mobileno" size="30" onKeyPress="return num(event)" class="search_input"/></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Uname</font></label></td>
                        <td><input type="text" name="username" size="30"  class="search_input" id="username"/>
							<img id="tick" src="tick.png" width="16" height="16"/>
	<img id="cross" src="cross.png" width="16" height="16"/>						</td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Password</font></label></td>
                        <td><input type="password" name="password" size="30"  class="search_input" id="pwd"/></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" value="SIGNUP" class="greenButton" />                          &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="clear" value="CLEAR" class="greenButton" />                        </td>
                      </tr>
                    </table>
              </form>
                  <?php
			if(isset($_POST["submit"]))
			{
			include("db.php");
			$fname=$_POST["firstname"];
			$lname=$_POST["lastname"];
			$street=$_POST["street"];
			$city=$_POST["city"];
			$state=$_POST["state"];
			$postal=$_POST["postal"];
			$phone=$_POST["phoneno"];
			$mobile=$_POST["mobileno"];
			$uname=$_POST["username"];
			$pwd=$_POST["password"];
			//$con=$_POST["conpassword"];
			$q="insert into register(Firstname,Lastname,Street,City,State,Postal,Phone,Mobile,Username,Password,Dt)values('$fname','$lname','$street','$city','$state','$postal','$phone','$mobile','$uname','$pwd',CURDATE())";
			$res=mysql_query($q);
			if(!$res)
			{
			
                echo' <script language="javascript">alert("Cannot Registered");</script>';
                
			}
			else
			{
			
                echo'<script language="javascript">alert("Registration Successfull");</script>';
                
			 echo "<meta http-equiv='refresh' content='0;url=index.php'>";
			}
			}
			?>


		   </td>
		   <td align="center" valign="top" style="padding-top:50px">
		   <img src="images/login_icon.png">
		   <form action="" method="post" onSubmit="return Form()" name="Item" >
		   
                          <table align="center">
						  <th>Login form<hr></th>
                            <tr>
                              <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">USERNAME</font></label></td>
                              <td><input type="text" name="username" size="20" class="search_input" /></td>
                            </tr>
                            <tr>
                              <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">PASSWORD</font></label></td>
                              <td><input type="password" name="password" size="20"  class="search_input"/></td>
                            </tr>
                            <tr>
                              <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">DESIGNATION</font></td>
                              <td><select name="designation" class="search_input">
                                  <option value="">-Select One-</option>
                                  <option value="admin">Admin</option>
								  <option value="doctor">Doctor</option>
                                  <option value="employee">Employee</option>
                                  <option value="patient">Patient</option>
								  <option value="pharmacy">Pharmacy</option>
                                </select></td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center"><input name="login" type="submit" value="SUBMIT" class="greenButton" />
                                &nbsp;&nbsp;&nbsp;                                
                              <input name="clear" type="reset" value="CLEAR" class="greenButton" /></td>
                            </tr>
                          </table>
                          
              </form>
                        <?php
		if(isset($_POST["login"]))
		{
		 include("db.php");
		 $uname=mysql_real_escape_string($_POST["username"]);$pwd=mysql_real_escape_string($_POST["password"]);$type=$_POST["designation"];
		 if($type=="doctor")
		 {
		  $q="select *from Doctor where Uid='$uname' and Pwd='$pwd'";
		  $res=mysql_query($q);
		  $no=mysql_num_rows($res);
		  if($no>0)
		  {
		   while($row=mysql_fetch_array($res))
		   {
		    $_SESSION["dname"]=$row['DName'];$_SESSION["spec"]=$row['Spec'];
			$_SESSION["name"]=$uname;
		    $_SESSION["pwd"]=$pwd;
		   
		   }
		  
		  //$doc=$_SESSION["docname"];
		  echo "<meta http-equiv='refresh' content='0;url=viewpatient.php'>";
		  }
		  else
		  {
		  
                  echo'<script language="javascript">alert("Invaid Doctor Login");</script>';
                   
		  }
		  }
		  else if($type=="patient")
		 {
		  $q="select *from register where Username='$uname' and Password='$pwd'";
		  $res=mysql_query($q);
		  $no=mysql_num_rows($res);
		  if($no>0)
		  {
		   while($row=mysql_fetch_array($res))
		   {
		    $_SESSION["id"] =$row['RegId'];
		    $_SESSION["name"]=$uname;
			$_SESSION["pname"]=$row['Firstname'];
			$_SESSION["street"]=$row["Street"];
			$_SESSION["city"]=$row["City"];
			$_SESSION["state"]=$row["State"];
			$_SESSION["mobile"]=$row["Mobile"];
			$_SESSION["postal"]=$row["Postal"];
		   }
		  echo "<meta http-equiv='refresh' content='0;url=app.php'>";
		  }
		  else
		  {
		  
                     echo'<script language="javascript">alert("Invaid Patient Login");</script>';
                      
		  }
		  }
		  else if($type=="employee")
		 {
		  $q="select *from Employee where Eid='$uname' and Pwd='$pwd'";
		  $res=mysql_query($q);
		  $no=mysql_num_rows($res);
		  if($no>0)
		  {
		  $_SESSION["name"]=$uname;$_SESSION["pwd"]=$pwd;
		   echo "<meta http-equiv='refresh' content='0;url=emppwd.php'>";
		  }
		  else
		  {
		 
                      echo'  <script language="javascript">alert("Employee Invalid Login");</script>';
                       
		  }
		  } else if($type=="pharmacy")
		 {
		  $q="select *from pharmacy where Eid='$uname' and Pwd='$pwd'";
		  $res=mysql_query($q);
		  $no=mysql_num_rows($res);
		  if($no>0)
		  {
		  $_SESSION["name"]=$uname;$_SESSION["pwd"]=$pwd;
		   echo "<meta http-equiv='refresh' content='0;url=phapwd.php'>";
		  }
		  else
		  {
		
                  echo'<script language="javascript">alert("Employee Invalid Login");</script>';
                     
		  }
		  }
		  else
		  {
		  if($uname=="admin" && $pwd=="admin")
		  {
		  
		  echo "<meta http-equiv='refresh' content='0;url=docview.php'>";
		  }
		  else
		  {
		  
            echo '<script>alert("Invalid Login");</script>';
                        
		  }
		
	}			
	
	}
		?>
		   </td>
		   
        </tr>
		<tr align="center">
		  <td colspan="2"><strong>Copy Rights @ 2017 All Rights Reserved</strong> </td>
		</tr>
      </table></td>
  </tr>
  </table>
</div>
</body>
</html>
