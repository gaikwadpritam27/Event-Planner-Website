<html>
<head>
    <title>User Registration</title>
</head>

<body>
<?php

extract($_POST);
include("database.php");
$rs=mysqli_query($con,"select * from user where login='$user_id'");
if(mysqli_num_rows($rs)>0)
{
    echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
    exit;
}
$query="insert into user(user_id,login,pass,name,email) values('$user_id','$login','$pass','$name','$email')";
$rs=mysqli_query($con,$query) or die("could Not perform the Query");
echo "<br><br><br><center><div class=head1>Your Login ID $user_id Created Successfully</div><center>";
echo "<br><center><div class=head1>Please Login using your user ID to see more details</div><center>";
echo "<br><center><div class=head1><a href=login.php>Login</a><center></div>";




?>
</body>
</html>