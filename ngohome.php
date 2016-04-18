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
    <link href="uploadstyle.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="script.js"></script>
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
    <div id="mainform">
<div id="innerdiv">
<!-- Required Div Starts Here -->
<div id="formdiv">
<h3>Upload image</h3>
<form action="" enctype="multipart/form-data" id="form" method="post" name="form">
<div id="upload">
<input id="file" name="file" type="file">
</div>
<input id="submit" name="submit" type="submit" value="Upload">
</form>
<div id="detail">
<b>Note:</b>
<ul>
<li>To Choose file Click on folder.</li>
<li>You can upload- <b>images(jpeg,jpg,png).</b></li>
</ul>
</div>
</div>
<div id="clear"></div>
<div id="preview">
<img id="previewimg" src="arrow.png"><img id="deleteimg" src="delete.png">
<span class="pre">IMAGE PREVIEW</span>
</div>
<div id="message">
<?php include 'uploadphp.php';?>
</div>
</div>
</div>
   
</body>
</html>

     
    