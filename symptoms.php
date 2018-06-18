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

<h1> Symptoms Add </h1>
<br />
<?php
$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);

$sql="select max(sid) as sid from symptom";
$result=mysql_query($sql);

while($a=mysql_fetch_array($result))
{
$inid=$a['sid'];
}

$maxid=$inid+1;
?>
<table border="1" style="height:570px; width:90%; border:1px solid #000000">
<form method="post">
<tr>
<th> ID </th>
<td align="center"> <input type="text" name="sid" value="<?php echo $maxid;?>" readonly="true"/></td>
</tr>
<tr>
<th> Symptom Name </th>
<td align="center"> <input type="text" name="sname" required/></td>
</tr>
<tr>
<th> Signs </th>
<td align="center"> <textarea name="description" required></textarea></td>
</tr>
<tr>
<th> Stage 1 Nutrition </th>
<td align="center"><textarea name="s1n" required></textarea></td>
</tr>
<tr>
<th> Stage 1 Medicine </th>
<td align="center"><textarea name="s1m" required></textarea></td>
</tr>
<tr>
<th> Stage 2 Nutrition </th>
<td align="center"><textarea name="s2n" ></textarea></td>
</tr>
<tr>
<th> Stage 2 Medicine </th>
<td align="center"><textarea name="s2m" ></textarea></td>
</tr>
<tr>
<th> Stage 3 Hospital Names </th>
<td align="center"><textarea name="s3n" ></textarea></td>
</tr>
<tr>
<th> Stage 3 Medicine </th>
<td align="center"><textarea name="s3m" ></textarea></td>
</tr>
<tr>
<th colspan="2"> <input type="submit" name="submit" value="Add" />&nbsp;<input type="reset" name="reset" /></th>
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

$sname=$_POST['sname'];
$description=$_POST['description'];
$s1n=$_POST['s1n'];
$s1m=$_POST['s1m'];
$s2n=$_POST['s2n'];
$s2m=$_POST['s2m'];
$s3n=$_POST['s3n'];
$s3m=$_POST['s3m'];

$sql=mysql_query("insert into symptom(sname,description,s1n,s1m,s2n,s2m,s3n,s3m) values ('$sname','$description','$s1n','$s1m','$s2n','$s2m','$s3n','$s3m')") or die(mysql_error());

echo "<script>";
echo "alert('Symptoms Add Successfully')";
echo "</script>";
echo "<script>";
echo "window.location='symptoms.php'";
echo "</script>";
}
?>

<?php
			$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);
			$sql="SELECT * FROM symptom ORDER BY sid ASC";
			$result = mysql_query($sql) or die(mysql_error());
			?>
			<table border="1" style="width:80%">
					<tr style="background-color:black; color:white; padding:10px 10px 10px 10px; margin:10px 10px 10px 10px;">
					<th style="background-color:black; color:white; padding:10px 10px 10px 10px; margin:10px 10px 10px 10px;"> Symptom ID </th>
					<th> Symptom Name </th>
					<th> Signs </th>
					<th> Stage 1 Nutrition </th>
					<th> Stage 1 Medicine </th>
				<th> Stage 2 Nutrition </th>
					<th> Stage 2 Medicine </th>
					<th> Stage 3 Hospital Names </th>
					<th> Stage 3 Medicine </th>
					<th> Edit </th>
					<th> Delete </th>
					</tr>
					<?php
			while($test = mysql_fetch_array($result))
			{
				$rsid=$test['sid'];
				$rsname=$test['sname'];
				$rdescription=$test['description'];
				$rs1n=$test['s1n'];
				$rs1m=$test['s1m'];
				$rs2n=$test['s2n'];
				$rs2m=$test['s2m'];
				$rs3n=$test['s3n'];
				$rs3m=$test['s3m'];
				?>
				
					
					<center>
					
					
					<tr>
					<td><?php echo $rsid ; ?></td>
					<td><?php echo $rsname ; ?></td>
					<td><?php echo $rdescription ; ?></td>
					<td><?php echo $rs1n ; ?></td>
					<td><?php echo $rs1m ; ?></td>
					<td><?php echo $rs2n ; ?></td>
					<td><?php echo $rs2m ; ?></td>
					<td><?php echo $rs3n ; ?></td>
					<td><?php echo $rs3m ; ?></td>
					
					<td><p style="font-size:14px; font-weight:bold; color:#000000; background-color:#FFFF00; padding:10px 10px 10px 10px"><?php echo "<a href='symptomsedit.php?sid=$rsid' style='text-decoration:none;font-weight:bold; color:black;'> Edit </a>";?></p></td>
					<td><p style="font-size:14px; font-weight:bold; color:#000000; background-color:#FF0000; padding:10px 10px 10px 10px"><?php echo "<a href='symptomsdelete.php?sid=$rsid' style='text-decoration:none;font-weight:bold; color:white;'> Delete </a>";?></p></td>
						
						</div>
						
						<?php
			}
				
			?>	
</tr></table>

<p> Designed By KSRCT Students </p>
</div>



</body>
</center>
</html>
