<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nutrition Analysis Using Data Mining</title>
<link rel="stylesheet" href="css/smart.css" />
</head>

<body bgcolor="#00CC00" onLoad="show_clock()">
<?php
$name=$_REQUEST['name'];
$userid=$_REQUEST['userid'];
?>
<center>
<div id="main">
<h1>Nutrition Analysis Using Data Mining</h1>
<ol>
<?php echo"<li><a href='patienthome.php?name=$name&userid=$userid'> Home </a></li>";?>
<?php echo"<li><a href='profile.php?name=$name&userid=$userid'>  Profile </a></li>";?>

<?php echo"<li><a href='password.php?name=$name&userid=$userid'>  Change Password </a></li>";?>

<li><a href="index.php">  Logout </a></li>
<li><a href=""  style="background-color:#FFFF00; color:#FF0000; font-weight:bold; border:1px solid #FF0000; font-size:14px">  <?php
echo date("d/m/Y") . " : "
?><script language="javascript" src="js/liveclock.js">
</script>
 </a></li>

</ol>

<br />
<br />
<?php

$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);

$sql="select * from user where id='$userid'";
$result=mysql_query($sql);

while($a=mysql_fetch_array($result))
{
				$rpname=$a['pname'];
				$rdob=$a['dob'];
				$rage=$a['age'];
				$rblood=$a['blood'];
				$rgender=$a['gender'];
				$rmobile=$a['mobile'];
				$raddress=$a['address'];
}


?>
<div id="rrr">
<h1> Patient Home </h1>
<br />
<h2> Welcome  <span style="color:#0000FF"><?php echo $rpname;?></span> !!!</h2>
<h4> <?php echo $raddress;?>, <?php echo $rmobile;?></h4>
<h4> Age : <?php echo $rage;?>, Blood Group : <?php echo $rblood;?></h4>
<br />

<br />


<table border="1" style="width:90%; border:1px solid #000000; height:200px">
<?php echo"<form method='post' action='detail.php?userid=$userid'>";?>
<tr>
<th> Symptoms </th>
<td align="center">
<select name="symptom">
<?php
$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);

$sql1="select * from symptom";
$result1=mysql_query($sql1);

while($a1=mysql_fetch_array($result1))
{
				$rss=$a1['sname'];
?>
<option> <?php echo $rss;?></option>
<?php
}
?>
</select>
</td>
</tr>
<tr>
<th colspan="2"> <input type="submit" name="submit" value="Done" />&nbsp;<input type="reset" name="reset" /></th>
</tr>
</form>
</table>
<br />
<br />
<br />

</div>
<br />
<br />
<hr />




<p> Designed By KSRCT Students </p>

</body>
</center>
</html>
