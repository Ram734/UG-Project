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

<h1> Symptoms Edit/Update </h1>
<br />
<?php
$ssid=$_REQUEST['sid'];

$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);

$sql="select * from symptom where sid='$ssid'";
$result=mysql_query($sql);

while($a=mysql_fetch_array($result))
{
$rsid=$a['sid'];
				$rsname=$a['sname'];
				$rdescription=$a['description'];
				$rs1n=$a['s1n'];
				$rs1m=$a['s1m'];
				$rs2n=$a['s2n'];
				$rs2m=$a['s2m'];
				$rs3n=$a['s3n'];
				$rs3m=$a['s3m'];
}


?>
<table border="1" style="height:570px; width:90%; border:1px solid #000000">
<form method="post">
<tr>
<th> ID </th>
<td align="center"> <input type="text" name="sid" value="<?php echo $rsid;?>" readonly="true"/></td>
</tr>
<tr>
<th> Symptom Name </th>
<td align="center"> <input type="text" name="sname" value="<?php echo $rsname;?>" required/></td>
</tr>
<tr>
<th> Signs </th>
<td align="center"> <textarea name="description" required><?php echo $rdescription;?></textarea></td>
</tr>
<tr>
<th> Stage 1 Nutrition </th>
<td align="center"><textarea name="s1n" required><?php echo $rs1n;?></textarea></td>
</tr>
<tr>
<th> Stage 1 Medicine </th>
<td align="center"><textarea name="s1m" required><?php echo $rs1m;?></textarea></td>
</tr>
<tr>
<th> Stage 2 Nutrition </th>
<td align="center"><textarea name="s2n" ><?php echo $rs2n;?></textarea></td>
</tr>
<tr>
<th> Stage 2 Medicine </th>
<td align="center"><textarea name="s2m" ><?php echo $rs2m;?></textarea></td>
</tr>
<tr>
<th> Stage 3 Hospital Name </th>
<td align="center"><textarea name="s3n" ><?php echo $rs3n;?></textarea></td>
</tr>
<tr>
<th> Stage 3 Medicine </th>
<td align="center"><textarea name="s3m" ><?php echo $rs3m;?></textarea></td>
</tr>
<tr>
<th colspan="2"> <input type="submit" name="update" value="Update" />&nbsp;<input type="reset" name="reset" /></th>
</tr>
</form>
</table><br />

</div>
<br />
<?php

if(isset($_POST['update']))
{	
$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);


$usid=$_POST['sid'] ;
				
					$usname=$_POST['sname'] ;
				
					$udescription=$_POST['description'] ;
					
						$us1n=$_POST['s1n'] ;
					$us1m=$_POST['s1m'] ;
					$us2n=$_POST['s2n'] ;
					$us2m=$_POST['s2m'] ;
					$us3n=$_POST['s3n'] ;
					$us3m=$_POST['s3m'] ;
	
		 mysql_query("UPDATE symptom SET sname='$usname',description ='$udescription',s1n ='$us1n',s1m ='$us1m',s2n ='$us2n',s2m ='$us2m',s3n ='$us3n',s3m ='$us3m' WHERE sid = '$usid'")
				or die(mysql_error()); 
				echo '<script language="javascript">';
echo 'alert("Symptom Updated updated Successfully")';
echo '</script>';
?>
<script>
<?php echo "window.location='symptoms.php';";?>
</script>
<?php
}		
?>

<p> Designed By KSRCT Students </p>
</div>



</body>
</center>
</html>
