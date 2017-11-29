<?php
$error=0;
if(isset($_POST['url'])){
$url=$_POST['url'];
$redirect="https://www.ss"."$url";
header("location:$redirect");

$error=0;
}
else{
	$error=1;
	$message="Enter url properly (Dont forget to remove https:www. form your url)";
}



?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Youtube Downloader</title>
</head>
<body>
	<div class="header">
		<h1>      Free Youtube Video Download Redirector</h1>
	</div>
	<div class="form"> 
	<form action="index.php" method="post">
		<label class="error"> <?php if($error==1) echo "$message"; ?></label>
		<ul>
		<li><h1>https://www.</h1></li>	
		<li><input type="text" name="url" class="url" placeholder="eg - youtube.com/watch?v=-wtITCHWuI"></li>
		</ul>
		<br>

		<br>
		<input type="image" name="submit" value="" class="button" src="button.png">
	</form>
	</div>
	<div class="bottom"> 
		<h1><a href="https://www.youtube.com" target="_blank">Click Here to go to youtube </a></h1>
	</div>
</body>
</html>