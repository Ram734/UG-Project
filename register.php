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
<img src="image/banner1.jpg" />
<br />
<br />

<div id="rrr">
<h1> Registration Form </h1>
<br />

<table border="1" style="height:570px; width:90%; border:1px solid #000000">
<form method="post">
<tr>
<th> Patient Name </th>
<td align="center"> <input type="text" name="pname" required/></td>
</tr>
<tr>
<th> Date of Birth </th>
<td align="center"> <input type="date" name="dob" required/></td>
</tr>
<tr>
<th> Age </th>
<td align="center"> <input type="number" name="age"  required/></td>
</tr>
<tr>
<th> Blood Group </th>
<td align="center"> <input type="text" name="blood" required/></td>
</tr>
<tr>
<th> Gender </th>
<td align="center"> <input type="radio" name="gender" value="male" required/>Male <input type="radio" name="gender" value="female" required/>Female </td>
</tr>
<tr>
<th> Mobile No (1st Time Passsword)</th>
<td align="center"><input type="text" maxlength="10" name="mobile"  id="OnlyNumbers" onkeypress = "return AllowNumbersOnly(event)"  REQUIRED /> </td>
</tr>
<script type="text/javascript">
  function AllowNumbersOnly(e) {
    var code = (e.which) ? e.which : e.keyCode;
    if (code > 31 && (code < 48 || code > 57)) {
      e.preventDefault();
    }
  }
</script>
<tr>
<th> Address </th>
<td align="center"> <textarea name="address" required></textarea></td>
</tr>


<tr>
<th colspan="2"> <input type="submit" name="submit" value="Regsiter" />&nbsp;<input type="reset" name="reset" /></th>
</tr>
</form>
</table><br />

</div>
<br />

<?php
if(isset($_POST['submit']))
{
$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);

$pname=$_POST['pname'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$blood=$_POST['blood'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$password=$_POST['mobile'];

$sql=mysql_query("insert into user(pname,dob,age,blood,gender,mobile,address,password) values ('$pname','$dob','$age','$blood','$gender','$mobile','$address','$password')") or die(mysql_error());

echo "<script>";
echo "alert('Registration Done Successfully')";
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
