<?php session_start();?>
<html>
	<head>
	<title>AJAX CHATTING</title>
	<style type="text/css">
body 			{ padding-left:40px; background:#57767F; font-family:arial;}
input, textarea 	{ font-family: arial; color:white; background:#57767F; font-size: 14px; }
#content 		{ width:800px; text-align:left; margin-left:60px; }

#chatwindow 		{ border:1px solid #aaaaaa; padding:4px; background:#232D2F; color:white;  width:550px; height:auto; font-family:courier new;}
#chatnick 		{ border: none; border-bottom:1px solid #aaaaaa; padding:4px; background:#57767F;}
#chatmsg 		{ border: none; border-bottom:1px solid #aaaaaa; padding:4px; background:#57767F; }

#info 			{ text-align:left; padding-left:0px; font-family:arial; }
#info td 		{ font-size:12px; padding-right:10px; color:#DFDFDF;  }
#info .small 		{ font-size:12px; padding-left:10px; padding-right:0px;}

#info a 		{ text-decoration:none; color:white; }
#info a:hover 		{ text-decoration:underline; color:#CF9700;}
</style>
	</head>
	<body>
		<div id="info">
		<br>
			<table border="0">
				<tr>
					<td colspan="2">
						
					</td>	
				</tr>
				<tr>
					<td class="small"></td>
					
				</tr>
				<tr>
					<td class="small"></td>
							
				</tr>
				<tr>
					<td class="small"></td>
							
				</tr>
				<tr>
					<td class="small"></td>
					
				</tr>
				<tr><td>&nbsp;</td></tr>
			</table>
					
		</div>
		
		
		<div id="content">
			<p id="chatwindow"> </p>		
<!--			<textarea id="chatwindow" rows="19" cols="95" readonly></textarea><br>
-->
			<input id="chatnick" type="text" size="9" maxlength="9" value="<?php echo $_SESSION['pname'];?>">&nbsp;
			<input id="chatmsg" type="text" size="60" maxlength="80"  onkeyup="keyup(event.keyCode);"> 
			<input type="button" value="add" onClick="submit_msg();" style="cursor: auto; border: thin #999999; color:#990000;"><br><br>
			<br>
			<a href="app.php">Click Here To Logout</a>
		</div>

	</body>
</html>

<script type="text/javascript">
 
/* Settings you might want to define */
	var waittime=800;		

/* Internal Variables & Stuff */
	chatmsg.focus()
	document.getElementById("chatwindow").innerHTML = "loading...";

	var xmlhttp = false;
	var xmlhttp2 = false;


/* Request for Reading the Chat Content */
function ajax_read(url) {
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
		if(xmlhttp.overrideMimeType){
			xmlhttp.overrideMimeType('text/xml');
		}
	} else if(window.ActiveXObject){
		try{
			xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e){
			}
		}
	}

	if(!xmlhttp) {
		alert('Giving up :( Cannot create an XMLHTTP instance');
		return false;
	}

	xmlhttp.onreadystatechange = function() {
	if (xmlhttp.readyState==4) {
		document.getElementById("chatwindow").innerHTML = xmlhttp.responseText;

		zeit = new Date(); 
		ms = (zeit.getHours() * 24 * 60 * 1000) + (zeit.getMinutes() * 60 * 1000) + (zeit.getSeconds() * 1000) + zeit.getMilliseconds(); 
		intUpdate = setTimeout("ajax_read('chat.txt?x=" + ms + "')", waittime)
		}
	}

	xmlhttp.open('GET',url,true);
	xmlhttp.send(null);
}

/* Request for Writing the Message */
function ajax_write(url){
	if(window.XMLHttpRequest){
		xmlhttp2=new XMLHttpRequest();
		if(xmlhttp2.overrideMimeType){
			xmlhttp2.overrideMimeType('text/xml');
		}
	} else if(window.ActiveXObject){
		try{
			xmlhttp2=new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try{
				xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e){
			}
		}
	}

	if(!xmlhttp2) {
		alert('Giving up :( Cannot create an XMLHTTP instance');
		return false;
	}

	xmlhttp2.open('GET',url,true);
	xmlhttp2.send(null);
}

/* Submit the Message */
function submit_msg(){
	nick = document.getElementById("chatnick").value;
	msg = document.getElementById("chatmsg").value;

	if (nick == "") { 
		check = prompt("please enter username:"); 
		if (check === null) return 0; 
		if (check == "") check = "anonymous"; 
		document.getElementById("chatnick").value = check;
		nick = check;
	} 

	document.getElementById("chatmsg").value = "";
	ajax_write("w.php?m=" + msg + "&n=" + nick);
}

/* Check if Enter is pressed */
function keyup(arg1) { 
	if (arg1 == 13) submit_msg(); 
}

/* Start the Requests! ;) */
var intUpdate = setTimeout("ajax_read('chat.txt')", waittime);

</script>

