<html>
<head>
<title>Patient Portal System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
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

</head>
<body>
<div align="center">
  <table border="5" cellpadding="0" cellspacing="0" style="border-collapse: collapse;margin-top:5px" width="840"  bgcolor="#EABE94" bordercolor="#DCDBDB">
    <tr>
      <td><table border="0" cellpadding="10" style="border-collapse: collapse" background="images/6.jpg" height="180px" width="865px" >
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
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table border="1" cellpadding="6" style="background-position:right;border-collapse:collapse;background-repeat:no-repeat" width="100%" background="images/blood-stock.png">
        <tr>
          <td height="363" align="center">
		   <form action="" method="post">
			<legend><font face="Times New Roman, Times, serif" color="#FF0000" size="+1"><br>
			Available Blood</font><br>
			<br />
			<input type="radio" name="blood" value="A +ve" />
			A +ve  
			&nbsp;&nbsp;
			<input type="radio" name="blood" value="A -ve" />A -ve&nbsp;&nbsp;<br>
			<br>
			<input type="radio" name="blood" value="B +ve" />B +ve&nbsp;&nbsp;
			<input type="radio" name="blood" value="B -ve" />B -ve<br>
			<br />
			<input type="radio" name="blood" value="AB +ve" />AB +ve&nbsp;&nbsp;
			<input type="radio" name="blood" value="AB -ve" />AB -ve&nbsp;&nbsp;<br>
			<br>
			<input type="radio" name="blood" value="O +ve" />O +ve&nbsp;&nbsp;
			<input type="radio" name="blood" value="O -ve" />O -ve<br /><br />
			<input type="submit" name="submit" value="CHECK" class="greenButton" />
			<br>
			<br>
			</legend>
			
			</form>
			<?php
			if(isset($_POST["submit"]))
			{
			include("db.php");
			$type=$_POST["blood"];
			
			
			$q1="select sum(unit)as unit from stock where sbg='$type' group by unit";
			$res1=mysql_query($q1);
			$blood1=0;
			$r1=mysql_num_rows($res1);
			if($r1>0)
			{
			 while($row1=mysql_fetch_array($res1))
			 {
			  $blood1=$blood1+$row1['unit'];
			}
			}
			
			
			$q="select sum(unit)as unit from BloodDonation where sbg='$type' group by unit";
			$res=mysql_query($q);
			$blood=0;
			$r=mysql_num_rows($res);
			if($r>0)
			{
			 while($row=mysql_fetch_array($res))
			 {
			  $blood=$blood+$row['unit'];
			}
			
			
			$stock=$blood-$blood1;
			
			
			echo "Available Unit : <font color='FF0000' size='+2'>".$stock."</font> units";
			}
			else
			{
			?>
			<script language="javascript">alert("This blood Group not available");</script>
			<?php
			}
			}
			?>
		    <br>
		    <br></td>
		   
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
