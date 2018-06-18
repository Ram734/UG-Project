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

<h1> User Details </h1>

</div><br />
<br />

<?php
			$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);
			$sql="SELECT * FROM user ORDER BY id ASC";
			$result = mysql_query($sql) or die(mysql_error());
			?>
			<table border="1" style="width:80%">
					<tr style="background-color:black; color:white; padding:10px 10px 10px 10px; margin:10px 10px 10px 10px;">
					<th style="background-color:black; color:white; padding:10px 10px 10px 10px; margin:10px 10px 10px 10px;"> User ID </th>
					<th> User Name </th>
					<th> Date of Birth </th>
					<th> Age </th>
					<th> Blood Group </th>
					<th> Gender </th>
					<th> Mobile </th>
					<th> Address </th>
					<th> Password </th>
					</tr>
					<?php
			while($test = mysql_fetch_array($result))
			{
				$rid=$test['id'];
				$rpname=$test['pname'];
				$rdob=$test['dob'];
				$rage=$test['age'];
				$rblood=$test['blood'];
				$rgender=$test['gender'];
				$rmobile=$test['mobile'];
				$raddress=$test['address'];
				$rpassword=$test['password'];
				?>
				
					
					<center>
					
					
					<tr>
					<td><?php echo $rid ; ?></td>
					<td><?php echo $rpname ; ?></td>
					<td><?php echo $rdob ; ?></td>
					<td><?php echo $rage ; ?></td>
					<td><?php echo $rblood ; ?></td>
					<td><?php echo $rgender ; ?></td>
					<td><?php echo $rmobile ; ?></td>
					<td><?php echo $raddress ; ?></td>
						<td><?php echo $rpassword ; ?></td>
					
						
						</tr>
						
						<?php
			}
				
			?>	
</table><br />
<br />
<div id="rrr">
<h1> User Feedback details </h1>
</div><br />
<br />
<?php
			$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);
			$sql="SELECT * FROM feedback";
			$result = mysql_query($sql) or die(mysql_error());
			?>
			<table border="1" style="width:50%">
					<tr style="background-color:black; color:white; padding:10px 10px 10px 10px; margin:10px 10px 10px 10px;">
					<th> User Name </th>
					<th> User Comments </th>
					</tr>
					<?php
			while($test = mysql_fetch_array($result))
			{
				$rname=$test['name'];
				$rcomments=$test['comments'];
				?>
				
					
					<center>
					
					
					<tr>
					<td><?php echo $rname; ?></td>
					<td><?php echo $rcomments; ?></td>
					</tr>
						<?php
			}
				
			?>	
</table><br />
<br />
<br />
<br />
<br />
<p> Designed By KSRCT Students </p>
</div><br />
</body>
</center>
</html>
