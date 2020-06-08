<?php session_start();?>
<html>
<head>
<title>patient portal</title>
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
           <td><div id="menu" style="margin-left:50px">
              <ul class="menu">
                
                <li><a href="emppwd.php" class="parent"><span>ChagePwd</span></a></li>
                <li><a href="bloodview.php"><span>Blood</span></a></li>
		
				<li><a href="diryview.php"><span>Emergency Directory</span></a></li>
				<li><a href=""><span>Labtest</span></a>
				<div>
                    <ul>
                      <li><a href="bloodtest.php"><span>BloodTest</span></a> </li>
                    <!--  <li><a href="urinetest.php"><span>Urine Test</span></a> </li>-->
					<!--  <li><a href="stooltest.php"><span>StoolTest</span></a> </li>-->
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
  <tr><td>&nbsp;</td></tr>
  <tr>
    <td align="center" ><table border="1" cellpadding="6" style="border-collapse: collapse" width="100%">
	  
        <tr>
          <td align="center" height="350" valign="top">
		   <form action="" method="post" name="testform">
		   <h3>Blood Test</h3><hr>
			<label><font face="Times New Roman, Times, serif" size="+1" color="#FF0000">View Patient</font></label>
			 <input type="text" name="testinput" value="<?php echo date('m/d/Y');?>" class="search_input" readonly />
	
			<input name="submit" type="submit" value="SUBMIT" class="greenButton" />
			<?php
			if(isset($_POST["submit"]))
			{
			 include("db.php");
			
			 $d=$_SESSION['dname'];//echo $d;
			 $da=$_POST["testinput"];//echo $da;
			 
			 $q="select * from treatment where Ttest1 ='Blood' ";
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
			   <th width="14%">Doctor</th>
			   
			   <th width="23%">Action</th>
			   </tr>
              <?php
			  while($row=mysql_fetch_array($res))
			  {
			  
			  ?>
			  <tr>
			  <td align="center"><?php echo $row['1'];?></td>
			   <td align="center"><?php echo $row['9'];?> </td>
			   <td align="center"><?php echo $row['2'];?></td>
			   <td align="center"><?php echo $row['3'];?></td>
			   <td align="center">
			   <a href="bloodtest2.php?id=<?php echo $row['0'] ?>&amp;Mode=Test" style="text-decoration:none">
			   <input name="button" type="button" value="VIEW" class="greenButton" /> </a></td>
			  </tr>  
		 <?php
			  }
			 }
			 else
			 {
			 echo "<br><font size='+1' color='FF0000'>Today There is No Patient</font>";
			 }
			 }
			 ?>
			</table>
			</form> 		   </td>
        </tr>
	
      </table></td>
  </tr>
  </table>
</div>
</body>
</html>
