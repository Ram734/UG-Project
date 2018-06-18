<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nutrition Analysis Using Data Mining</title>
<link rel="stylesheet" href="css/smart.css" />

</head>

<body bgcolor="#FF6600" onLoad="show_clock()" >

<center>
<div id="main">
<h1>Nutrition Analysis Using Data Mining</h1>
<ol>
<li><a href="index.php"> Home </a></li>
<li><a href="about.php">  About Us </a></li>
<li><a href="adminlogin.php">  Admin </a></li>
<li><a href="feedback.php">  Feedback Form </a></li>
<li><a href=""  style="background-color:#FFFF00; color:#FF0000; font-weight:bold; border:1px solid #FF0000; font-size:14px">  <?php
echo date("d/m/Y") . " : "
?><script language="javascript" src="js/liveclock.js">
</script>
 </a></li>
</ol>
<img src="image/banner.jpeg" />
<br />
<br />

<div id="rrr">
<h1> Login </h1>
<br />

<table border="1" style="height:170px; width:50%; border:1px solid black">
<form method="post">
<tr>
<th> Username (DOB) </th>
<td align="center"> <input type="text" name="username" placeholder="YYYY-MM-DD" required/></td>
</tr>
<tr>
<th> Password </th>
<td align="center">  <input type="password" name="password" required/></td>
</tr>
<tr>
<th colspan="2"> <input type="submit" name="submit" value="Login" />&nbsp;<input type="reset" name="reset" /></th>
</tr>
<tr>
<th colspan="2" align="right"><a href="register.php"> New user Register Here</a></th>
</tr>
</form>
</table><br />

</div>
<br />


<?php
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);

 
 $sql="select * from user where dob = '$username' and password = '$password'";
$result=mysql_query($sql);
while($a=mysql_fetch_array($result))
{
$userid=$a['id'];
$inusername=$a['dob'];
$inpassword=$a['password'];

$name=$a['pname'];
}


if($username==isset($inusername) and $password==$inpassword)
{
echo "<script>";
echo "window.location='patienthome.php?name=$name&userid=$userid'";
echo "</script>";
}
else
{
echo "<script>";
echo "alert('Please Check your Username or Password')";
echo "</script>";
}
}
?>


<p> Designed By KSRCT Students </p>
</div>



</body>
</center>
</html>
