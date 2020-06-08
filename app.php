<?php session_start(); 
?>

<html>
<head>
<title>Patient Portal System</title>
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
           <td><div id="menu">
              <ul class="menu">
               
                   <li><a href="app.php"><span>Appointment</span></a></li>
                <li><a href="histroy.php"><span>Doctors'</span></a></li>
                <li><a href="feedback2.php"><span>F/B</span></a></li>
               <!-- <li><a href="billing.php"><span>Hospital Bill</span></a></li>-->
				<li><a href="billing2.php"><span>Pharmacy Bill</span></a></li>
				<li><a href="chat1.php"><span>Chatting</span></a></li>
				<li><a href="index.php"><span>Logout</span></a></li>
				  <div id="copyright"><a href="http://apycom.com/"></a></div></td>
              </ul>
            </div>
           
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table border="1" cellpadding="6" style="border-collapse:collapse" width="100%">
        <tr>
       
		   <td align="center">
		   <form  action="#" method="post" name="testform" enctype="multipart/form-data" onSubmit="return valid()">
                    <fieldset>
                    <legend><font face="Times New Roman, Times, serif" size="+1" color="#FF0000">Patient Profile</font></legend>
                    <table width="676">
                      <tr>
                        <td width="161"><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Doctor Name</font></label></td>
<td width="293">
	<select name="dn" id="dn" class="search_input">
	<option value="">Select Doctor</option>
	<?php
			include "db.php";
	$sel="select * from doctor order by DName";

	$from=mysql_query($sel);
	while($doc=mysql_fetch_object($from))
	{
	?>
	<option value="<?php echo $doc->DName; ?>"><?php echo $doc->Spec.'-'.$doc->DName; ?></option>
	<?php } ?></select></td>
                      <td width="206" rowspan="7"><img src="images/patient.png"></td>
                      </tr>
                      <tr>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">AppDate</font></td>
                        <td><input type="text" name="testinput"  size="30"/>
                          <script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'testform',
		// input name
		'controlname': 'testinput'
	});

	</script>                        </td>
                      </tr>
                      <tr>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">Choose TimeSlots</font></td>
                        <td><input type="radio" name="time" value="5-5.30pm" checked="checked" />
                          5-5.30pm
                          <input type="radio" name="time" value="5.30-6pm" />
                          5.30-6pm
                          <input type="radio" name="time" value="6-6.30pm" />
                          6-6.30pm</td>
                      </tr>
                      <tr>
                        <td><font face="Times New Roman, Times, serif" size="+1" color="#990000">Patient Name</font></td>
                        <td><input name="apname" type="text" size="30" value="<?php echo $_SESSION['pname'];?>" class="search_input"readonly="true"/></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Gender</font></label></td>
                        <td><input type="radio" name="gender" value="male" checked="checked" />
                          Male
                          <input type="radio" name="gender" value="female" />
                          Female</td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Mobile No</font></label></td>
                        <td><input type="text" name="mobileno" size="30"  class="search_input"/></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Place</font></label></td>
                        <td><input type="text" name="place" size="30"  class="search_input" /></td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">EmailId</font></label></td>
                        <td><input type="text" name="email" size="30"  class="search_input"/></td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                    </fieldset>
                    <fieldset>
                    <legend><font face="Times New Roman, Times, serif" size="+1" color="#FF0000">Relation profile</font></legend>
                    <table width="678">
                      <tr>
                        <td width="181"><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Relation for</font></label></td>
                        <td width="233"><select name="app" class="search_input">
                            <option value="">-Select One-</option>
                            <option value="brother">Brother</option>
                            <option value="sister">Sister</option>
                            <option value="mother">Mother</option>
                            <option value="father">Father</option>
                            <option value="son">Son</option>
                            <option value="daughter">Daughter</option>
							<option value="friend">Friend</option>
							<option value="other">Other</option>
                        </select></td>
                        <td width="248">&nbsp;</td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Username</font></label></td>
                        <td><input type="text" name="username" size="30"  class="search_input"/></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Gender</font></label></td>
                        <td><input type="radio" name="gender1" value="male" checked="checked"/>
                          Male
                          <input type="radio" name="gender1" value="female" />
                          Female</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Mobile No</font></label></td>
                        <td><input type="text" name="mob" size="30" class="search_input" /></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><label><font face="Times New Roman, Times, serif" size="+1" color="#990000">Place</font></label></td>
                        <td><input type="text" name="pla2" size="30"  class="search_input"/></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center"><input name="submit" type="submit" value="SUBMIT" class="greenButton"/>
                          &nbsp;&nbsp;                          
                        <input name="clear" type="reset" value="CLEAR" class="greenButton" /></td>
                        <td align="center">&nbsp;</td>
                      </tr>
                    </table>
                    </fieldset> 
			  </form>
					  <?php 
if(isset($_POST["submit"]))
{
 include("db.php");
 
 $dn=$_POST["dn"];//echo $dn;
 $spec=0;//echo $spec;
 $da=$_POST["testinput"];//echo $da;
 $t1=$_POST["time"];//echo $t1;// $t2=$_POST["time2"]; $t3=$_POST["time3"];
 $ap=$_POST["apname"];//echo $ap;
 $gen=$_POST["gender"];//echo $gen;
 $mo=$_POST["mobileno"];//echo $mo;
 $pla=$_POST["place"];//echo $pla;
 $ma=$_POST["email"];//echo $ma;
 $app=$_POST["app"];//echo $app;
 $un=$_POST["username"];//echo $un;
 $ge=$_POST["gender1"];//echo $ge;
 $mob=$_POST["mob"];//echo $mob;
 $p2=$_POST["pla2"];//echo $p2;
 $q="insert into appoinment(AName,Gender,MobileNo,Place,mailid,Relationfor,UName,UGender,UMobileNo,UPlace,S1,AppDt,Dt,DName,  	Specia)values('$ap','$gen','$mo','$pla','$ma','$app','$un','$ge','$mob','$p2','$t1','$da',CURDATE(),'$dn','$spec')";
 //$q1="insert into token(PId,PName,DName,TokenNo,Dt)values()";
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
			?>		   </td>
        </tr>
					
      </table></td>
  </tr>
  </table>
</div>
</body>
</html>
<script type="text/javascript">
function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		  
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		   
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		   
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		   
		    return false
		 }

 		 return true					
	}
function valid() {
	
	var frm = document.testform;

	
if(frm.dn.value =="") { alert("Please Select The Doctor."); frm.dn.focus(); return false }
if(frm.testinput.value =="") { alert("Please Appointment Date."); frm.testinput.focus(); return false }
if(frm.mobileno.value =="") { alert("Please Enter The Mobile No."); frm.mobileno.focus(); return false }
if(isNaN(frm.mobileno.value)) { alert("Mobile Number Is Invalid."); frm.mobileno.focus(); return false }
if(frm.mobileno.value.length != 10) { alert("Please Enter The 10 Digits Mobile Number ! ");frm.mobileno.focus(); return false;}

if(frm.place.value =="") { alert("Please Enter The Place."); frm.place.focus(); return false }

if(frm.email.value =="") { alert("Please Enter The Email."); frm.email.focus(); return false }
if (echeck(frm.email.value)==false){alert("Email Id Is Invalid ");frm.email.focus();frm.email.value= ""; return false;}

if(frm.app.value =="") { alert("Please Select The Relation For."); frm.app.focus(); return false }
if(frm.username.value =="") { alert("Please Enter The User Name."); frm.username.focus(); return false }

if(frm.mob.value =="") { alert("Please Enter The Mobile No."); frm.mob.focus(); return false }
if(isNaN(frm.mob.value)) { alert("Mobile Number Is Invalid."); frm.mob.focus(); return false }
if(frm.mob.value.length != 10) { alert("Please Enter The 10 Digits Mobile Number ! ");frm.mob.focus(); return false;}


if(frm.pla2.value == "") { alert("Please Enter The Place");frm.pla2.focus(); return false;}

return true;
}

</script>