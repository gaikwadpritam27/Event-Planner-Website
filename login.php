<?php
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($con,"select * from user where user_id='$user_id' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$user_id;
	}
}
if(isset($_SESSION["login"]))
{
	echo"<h1 align=center>hii you are successfully login!!!</h1>";
	echo "<center><a href=wedding.php>More details about wedding planner</a></center><br><br>";
	echo "<center><a href=birthday.php>More details about birthday planner</a></center>";
	exit;
}
?>







<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width",initial-scale=1>
<link rel="stylesheet" href="style.css">
</head>

<body>
<center>
<div class="floating-box">
<h1><marquee bgcolor="yellow";font-size="700">Login Form</marquee></h1><br><br>
        
<h1>Login <i class="fas fa-sign-in"></i><br><br></h1>
<form name="form1" method="post">


	<label for="uname">user Id </label>
	<input type="text" id="loginid2" name="user_id"><br><br>

	<label for="pwd">password</label>
	<input type="password" id="pass2" name="pass"><br><br>
	<input name="submit" type="submit" id="submit" value="login"><br>

	<p>new user <a href="signup.php">Register Here</a></p>
	
</form>
</div>
</center>
</body>
</html>
