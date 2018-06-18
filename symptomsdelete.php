<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nutrition Analysis Using Data Mining</title>
<link rel="stylesheet" href="css/smart.css" />
</head>

<body bgcolor="#CC3300" onLoad="show_clock()">
<center>
<div id="main">
<h1>Nutrition Analysis Using Data Mining</h1>
<ol>
<li><a href="adminhome.php"> Home </a></li>
<li><a href="symptoms.php">  Symptoms </a></li>
<li><a href="user.php">  User </a></li>
<li><a href="index.php">  Logout </a></li>
<li><a href=""  style="background-color:#FFFF00; color:#FF0000; font-weight:bold; border:1px solid #FF0000; font-size:14px">  <?php
echo date("d/m/Y") . " : "
?><script language="javascript" src="js/liveclock.js">
</script>
 </a></li>
</ol>
<br /><br /><br />
<div id="rrr">

<h1> Symptoms Delete </h1>
<br />
<?php
$ssid=$_REQUEST['sid'];

$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);

mysql_query("DELETE FROM symptom WHERE sid = '$ssid'")
	or die(mysql_error());  
	
	echo '<script language="javascript">';
echo 'alert("Symptom Deleted Successfully")';
echo '</script>';
?>
<script>
<?php echo "window.location='symptoms.php'";?>
</script>
?>

<p> Designed By KSRCT Students </p>
</div>



</body>
</center>
</html>
