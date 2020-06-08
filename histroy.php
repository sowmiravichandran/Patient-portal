<?php session_start();

?>
<html>
<head>
<title>MTP & TS</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
<link rel="stylesheet" type="text/css" href="pagination/pagination.css" />
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
<?php
error_reporting(0);
include("db.php");
include "function.php";
?>
<body>
<div align="center">

  <table border="5" cellpadding="0" cellspacing="0" style="border-collapse: collapse;margin-top:5px" width="840"  bgcolor="#EABE94" bordercolor="#DCDBDB">
    <tr>
      <td>
<table border="0" cellpadding="10" style="border-collapse: collapse" background="images/6.jpg"height="180px" width="865px">
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>  </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="6" style="border-collapse:collapse;" width="100%">
        <tr>
          <td><div id="menu">
              <ul class="menu">
               
                  <li><a href="app.php"><span>Appointment</span></a></li>
                <li><a href="histroy.php"><span>Doctors'</span></a></li>
                <li><a href="feedback2.php"><span>F/B</span></a></li>
             <!--   <li><a href="billing.php"><span>Hospital Bill</span></a></li>-->
				<li><a href="billing2.php"><span>Pharmacy Bill</span></a></li>
				<li><a href="chat1.php"><span>Chatting</span></a></li>
				<li><a href="index.php"><span>Logout</span></a></li>
				 
              </ul>
            </div>
            <div id="copyright"><a href="http://apycom.com/"></a></div></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td valign="top">
	
	<table border="1" cellpadding="6" style="border-collapse: collapse" width="100%" height="393">
        <tr>
          <td height="46"  valign="top" colspan="6">
              
			<h2>Doctor's Instructions</h2>			</td></tr>
			<tr>
			  <th width="14%" height="52" align="center"><strong>Doctor</strong></th>
			  <th width="9%" align="center"><strong>Date</strong></th>
			  <th width="44%" align="center"><strong>Prescrption</strong></th>
			  <th width="20%" align="center"><strong>Instruction</strong></th>
		      <th width="13%" align="center">Tests</th>
		  </tr>
			
			<?php
			
			//echo $_SESSION['pname'];
			
		  $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit =1;
		
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`treatment` ";
		$where = "Tpatient='".$_SESSION[pname]."'";
		
$sqlup="Select * from {$statement}
        where {$where} order by Tid desc LIMIT {$startpoint},{$limit}";
	$we=mysql_query($sqlup);
			
			while($res=mysql_fetch_object($we))
			{
			?>
			<tr>
			  <td height="216" align="center"><?php echo $res->Tdoctor; ?></td>
			  <td align="center"><?php echo $res->Tdate; ?></td>
			  <td align="center"><?php echo $res->Tpres; ?></td>
			  <td align="center"><?php echo $res->Tins; ?></td>
		      <td align="center">Test 1  - <?php echo $res->Ttest1; ?><br>
	          Test 2 - <?php echo $res->Ttest2; ?><br>
              Test 3 - <?php echo $res->Ttest3; ?></td>
		  </tr>
			  <?php
			}
			?>
				
		<tr align="center">
		  <td height="32" colspan="10"><?php  echo pagination($statement,$where,$limit,$page);?></td>
		  </tr>
		
     
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  </table>
</div>
</body>
</html>
