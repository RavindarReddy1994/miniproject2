<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index1.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['user_email']; ?></title>
<link rel="stylesheet" href="homestyle.css" type="text/css" />
</head>
<body>
<div id="header">
	<div id="left">
    <label>welcome</label>
    </div>
    <div id="right">
    	<div id="content">
        	hi' <?php echo $userRow['user_name']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
    <center>
<div id="msg">
<form method="post">
<table align="center" width="40%" border="0">
<tr>
    <td><textarea rows = "15" cols="70" placeholder="type msg here"  ></textarea></td>
</tr>
    <tr>
<td><button type="submit" name="send">Send </button></td>
</tr>
    </table>
    </form>
        </div>
    </center>
    </body>
</html> 