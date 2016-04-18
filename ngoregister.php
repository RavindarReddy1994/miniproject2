<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: ngohome.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
    $num = mysql_real_escape_string($_POST['num']);
	
	$uname = trim($uname);
	$email = trim($email);
	$upass = trim($upass);
    $num = trim($num);
	
	// email exist or not
	$query = "SELECT user_email FROM ngo WHERE user_email='$email'";
	$result = mysql_query($query);
	
	$count = mysql_num_rows($result); // if email not found then register
	
	if($count == 0){
		
		if(mysql_query("INSERT INTO ngo(user_name,user_email,user_pass,user_num) VALUES('$uname','$email','$upass','$num')"))
		{
			?>
			<script>alert('successfully registered ');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}		
	}
	else{
			?>
			<script>alert('Sorry Email ID already taken ...');</script>
			<?php
	}
	
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
    <tr>
<td><button type="submit" name="btn-signup">NGO's </button></td>
</tr>
<tr>
<td><input type="text" name="uname" placeholder="NGO Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><input type="text" name="num" placeholder="mobile number" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="ngoindex1.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>