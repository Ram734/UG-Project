<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nutrition Analysis Using Data Mining</title>
<link rel="stylesheet" href="css/smart.css" />
</head>

<body bgcolor="#FF6600" onLoad="show_clock()">
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
<img src="image/feedback.jpg" />
<marquee> <strong> Enter your feedback for changes required to develop our web page </marquee> </strong>
<br><br/>
<div id="rrr">
<h1> Feedback Form </h1>
<form method="post">
<br><br/>
<center> &nbsp; Enter your Name &nbsp; &nbsp;&nbsp;<input type="text" name="name" required> <center/>
<br><br/>
<center> Post your Comments &nbsp;&nbsp;&nbsp; <textarea name="comments" required></textarea> <center/>
<br/>
<center><input type="submit" name="submit" value="submit" />&nbsp;&nbsp;<input type="reset" name="reset" /><center/>
<br />
<br />
</form>
</div>
<br />
<?php
if(isset($_POST['submit']))
{
$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);

$name=$_POST['name'];
$comments=$_POST['comments'];
$sql=mysql_query("insert into feedback(name,comments)values('$name','$comments')") or die(mysql_error());
echo "<script>";
echo "alert('Feedback submitted Successfully')";
echo "</script>";
echo "<script>";
echo "window.location='index.php'";
echo "</script>";
}
?>
<p> Designed By KSRCT Students </p>
</div>
</body>
</center>
</html>