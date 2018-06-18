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
<h2> Welcome  <span style="color:#0000FF"><?php echo $rpname;?></span> !!!</h2>
<div id="rrr">
<table border="1" style="height:270px; width:90%; border:1px solid #000000">
<form method="post">
						
						<tr>
						<th> Old Password</th>
						<td><input type="password" placeholder="Old Password" name="old" required></td>
						</tr>
						<tr>
						<th> New Password</th>
						<td><input type="password" placeholder="Create New password" name="new" required></td>
						</tr>
						<tr>
						<th> Confirm Password</th>
						<td><input type="password" placeholder="Confirm New Password" name="cnew" required></td></tr>


<tr>
<th colspan="2"> <input type="submit" name="change" value="Regsiter" />&nbsp;<input type="reset" name="reset" /></th>
</tr>
</form>
</table><br />
<?php


if(isset($_POST['change']))
{	
$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);


$old=$_POST['old'] ;
$new=$_POST['new'] ;
$cnew=$_POST['cnew'] ;
				
				
			$sql="SELECT * FROM user where id = '$userid'";
			$result = mysql_query($sql) or die(mysql_error());
			while($test = mysql_fetch_array($result))
			{
			$inpassword=$test['password'];
			}
			
			if($old==$inpassword)
			{
			
				if($new==$cnew)
				{
	
		 mysql_query("UPDATE user SET password='$cnew' WHERE id = '$userid'")
				or die(mysql_error()); 
				echo '<script language="javascript">';
echo 'alert("Profile Password updated Successfully, Please Login Again!")';
echo '</script>';
?>
<script>
<?php echo "window.location='index.php';";?>
</script>
<?php
 }
 else
 {
 echo '<script language="javascript">';
echo 'alert("New password Does not Match")';
echo '</script>';
}
}
else
 echo '<script language="javascript">';
echo 'alert("Incorrect Old Password!")';
echo '</script>';
}		
?>
<p> Designed By KSRCT Students </p>

</body>
</center>
</html>
