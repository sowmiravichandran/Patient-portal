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
          <td><div id="menu" style="margin-left:100px">
              <ul class="menu">
                
                <li><a href="viewpatient.php"><span>View Patient</span></a></li>
				<li ><a href="feedback.php"><span>Feedback</span></a></li>
                <li><a href="chat.php"><span>Chatting</span></a></li>
				<li><a href="changepwd.php"><span>ChangePwd</span></a></li>
				<li><a href="index.php"><span>Logout</span></a></li>
				 
              </ul>
            </div>
            <div id="copyright"><a href="http://apycom.com/"></a></div></td>
        </tr>
      </table></td>
  </tr>
  <tr><td>&nbsp;</td></tr>
  <tr>
    <td align="center" ><table border="1" cellpadding="6" style="border-collapse: collapse" width="100%">
        <tr>
          <td align="center" height="350" valign="top">
		   <form action="" method="post" name="testform">
			<label><font face="Times New Roman, Times, serif" size="+1" color="#FF0000">ViewPatient</font></label>
			 <input type="text" name="testinput" value="<?php echo date('m/d/Y');?>" class="search_input" />
	
			<input name="submit" type="submit" value="SUBMIT" class="greenButton" />
			<?php
			if(isset($_POST["submit"]))
			{
			 include("db.php");
			
			 $d=$_SESSION['dname'];//echo $d;
			 $da=$_POST["testinput"];//echo $da;
			 
			 $q="select * from appoinment where AppDt='$da' and DName='$d'";
			 $res=mysql_query($q);
			 $no=mysql_num_rows($res);
			 ?>
			 <?php
			 if($no>0)
			 {
			 ?>
			 <table width="100%" height="94" border="2" background="images/graphics (419).jpg">
			   <tr>
			   <th width="14%" height="30">Patient name</th>
			   <th width="10%">Date</th>
			   <th width="10%">Gender</th>
			   <th width="14%">Mobile</th>
			   <th width="12%">City</th>
			   <th width="17%">E mail </th>
			   <th width="23%">Action</th>
			   </tr>
              <?php
			  while($row=mysql_fetch_array($res))
			  {
			  ?>
			  <tr>
			  <td align="center"><?php echo $row['AName'];?></td>
			   <td align="center"><?php echo $row['AppDt'];?> </td>
			   <td align="center"><?php echo $row['2'];?></td>
			   <td align="center"><?php echo $row['3'];?></td>
			   <td align="center"><?php echo $row['4'];?></td>
			   <td align="center"><?php echo $row['5'];?></td>
			   <td align="center">
			   <a href="checkup.php?id=<?php echo $row['AId'] ?>&amp;Mode=Edit" style="text-decoration:none">
			   <input name="button" type="button" value="VIEW" class="greenButton" /> </a></td>
			  </tr>  
		 <?php
			  }
			 }
			 else
			 {
			 echo "<br><font size='+1' color='FF0000'>Today There s No Patient</font>";
			 }
			 }
			 ?>
			</table>
			</form> 		   </td>
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
