<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nutrition Analysis Using Data Mining</title>
<link rel="stylesheet" href="css/smart.css" />
</head>

<body bgcolor="#00CC00" onLoad="show_clock()">
<?php
$name=isset($_REQUEST['name']);
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
$symptom=$_POST['symptom'];
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
<h1> Symptom Name:&nbsp;<?php echo $symptom;?> </h1>
<br />
<br />

<br />

<?php


$smart=mysql_pconnect("localhost","root","");
mysql_select_db("prasanna",$smart);

			$sql="SELECT * FROM symptom where sname = '$symptom'";
			$result = mysql_query($sql) or die(mysql_error());
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
			}
				?>
				
					
					<center>
					<table border="1" style="width:80%;">
					<tr>
					<th style="background-color:black; color:white; padding:10px 10px 10px 10px; margin:10px 10px 10px 10px;"> Signs </th>
					</tr>
					<tr>
					<td align="center"><?php echo $rdescription ; ?></td>
					</tr>
					</table><br />
<br />

					<hr />
					<br />
<br />

					<table border="1" style="width:90%; border:1px solid #000000; height:200px">
<?php echo"<form method='post'>";?>
<tr>
<th> Stage </th>

<td align="center">
<input type="hidden" name="symptom" value="<?php echo $symptom;?>" />
<select name="stage">
<option value="Stage 1 (Affected between 2 to 3 Days)"> Stage 1 (Affected between 2 to 3 Days)</option>
<option value="Stage 2 (Affected more than a week)"> Stage 2 (Affected more than a week)</option>
<option value="Stage 3 (Affected more than a Month)"> Stage 3 (Affected more than a Month)</option>

</select>
</td>
</tr>
<tr>
<th colspan="2"> <input type="submit" name="select" value="Done" />&nbsp;<input type="reset" name="reset" /></th>
</tr>
</form>
</table><br />
<?php
if(isset($_POST['select']))
{
$stage=$_POST['stage'];

if($stage=="Stage 1 (Affected between 2 to 3 Days)")
{
?>

					<table border="1" style="width:80% ;height:200px;">
					<tr style="background-color:black; color:white; padding:10px 10px 10px 10px; margin:10px 10px 10px 10px;">
					<th> Stage </th>
					<th> Nutrition </th>
					<th> Medicine </th>
					</tr>
					<tr>
					<th style="background-color:black; color:white; padding:10px 10px 10px 10px; margin:10px 10px 10px 10px;" > Stage 1</th>
					<td align="center"><?php echo $rs1n ; ?></td>
					<td align="center"><?php echo $rs1m ; ?></td>
					</tr>
					</table>
					<br/>
					<table border="1" style="width:50%; height:50px";>
                    <td> You can use nutrition instead of medicine for this symptom,the contents in the nutrition is better when compare to medicine in this stage...</td>
					</table>
					<h2><a href="feedback.php" >Click here to submit your feedback</a></h2>
					<?php
					}
elseif($stage=="Stage 2 (Affected more than a week)")
{
?>

					<table border="1" style="width:80% ;height:200px;">
					<tr style="background-color:black; color:white; padding:10px 10px 10px 10px; margin:10px 10px 10px 10px;">
					<th> Stage </th>
					<th> Nutrition </th>
					<th> Medicine </th>
					</tr>
					<tr>
					<th style="background-color:black; color:white; padding:10px 10px 10px 10px; margin:10px 10px 10px 10px;" > Stage 2</th>
					<td align="center"><?php echo $rs2n ; ?></td>
					<td align="center"><?php echo $rs2m ; ?></td>
					</tr>
					</table>
					<br/>
					<table border="1" style="width:50%; height:50px";>
                    <td> In this stage the value in the nutrition is less than medicine,you can also use nutrition but medicine has more efficient to get preserved in this stage... </td>
					</table>
					<h2><a href="feedback.php" >Click here to submit your feedback</a></h2>
					<?php
					}
					elseif($stage=="Stage 3 (Affected more than a Month)")
{
?>

					<table border="1" style="width:80% ;height:200px;">
					<tr style="background-color:black; color:white; padding:10px 10px 10px 10px; margin:10px 10px 10px 10px;">
					<th> Stage </th>
					<th> Hospital Names </th>
					<th> Medicine </th>
					</tr>
					<tr>
					<th style="background-color:black; color:white; padding:10px 10px 10px 10px; margin:10px 10px 10px 10px;" > Stage 3</th>
					<td align="center"><?php echo $rs3n ; ?></td>
					<td align="center"><?php echo $rs3m ; ?></td>
					</tr>
					</table>
					<br/>
					<table border="1" style="width:50%; height:50px";>
                    <td> When your symptom is not get cured using the mentioned medicine you can better suggest to a doctor for your satisfaction and clarification,the relevant hospital details has been provided... </td>
					</table>
					<h2><a href="feedback.php" >Click here to submit your feedback</a></h2>
					<?php
					}
					}
					?>
<p> Designed By KSRCT Students </p>

</body>
</center>
</html>
