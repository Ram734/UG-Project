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
<table border="1" style="height:570px; width:90%; border:1px solid #000000">
<form method="post">
<tr>
<th> Patient ID </th>
<td align="center"> <input type="text" name="userid" value="<?php echo $userid;?>" readonly="true"/></td>
</tr>
<tr>
<th> Patient Name </th>
<td align="center"> <input type="text" name="pname" value="<?php echo $rpname;?>" required/></td>
</tr>
<tr>
<th> Date of Birth </th>
<td align="center"> <input type="date" name="dob" value="<?php echo $rdob;?>" required/></td>
</tr>
<tr>
<th> Age </th>
<td align="center"> <input type="text" name="age" value="<?php echo $rage;?>" required/></td>
</tr>
<tr>
<th> Blood Group </th>
<td align="center"> <input type="text" name="blood" value="<?php echo $rblood;?>" required/></td>
</tr>
<tr>
<th> Gender </th>
<td align="center"> 
<select name="gender">
<option><?php echo $rgender;?></option>
<option>Male</option>
<option> Female </option>
</select></td>
</tr>
<tr>
<th> Mobile No </th>
<td align="center"> <input type="text" name="mobile" value="<?php echo $rmobile;?>" required/></td>
</tr>
<tr>
<th> Address </th>
<td align="center"> <textarea name="address" required><?php echo $raddress;?> </textarea></td>
</tr>


<tr>
<th colspan="2"> <input type="submit" name="update" value="Regsiter" />&nbsp;<input type="reset" name="reset" /></th>
</tr>
</form>
</table><br />
<?php

if(isset($_POST['update']))
{	
$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);


$userid=$_POST['userid'] ;
				
					$pname=$_POST['pname'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$blood=$_POST['blood'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$password=$_POST['mobile'];
	
		 mysql_query("UPDATE user SET pname='$pname',dob ='$dob',age ='$age',blood ='$blood',gender ='$gender',mobile ='$mobile',address ='$address',password ='$password' WHERE id = '$userid'")
				or die(mysql_error()); 
				echo '<script language="javascript">';
echo 'alert("Profile Updated updated Successfully ! Please Login Again")';
echo '</script>';
?>
<script>
<?php echo "window.location='index.php';";?>
</script>
<?php
}		
?>
<p> Designed By KSRCT Students </p>

</body>
</center>
</html>
