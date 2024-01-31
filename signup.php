<html>
<head>
<title>New user signup</title>
<script language="javascript">
function check()
{
    if(document.form1.user_id.value=="")
    {
        alert("Please Enter user Id");
        document.form1.user_id.focus();
        return false;
    }

    if(document.form1.login.value=="")
    {
        alert("Please Enter Your Password");
        document.form1.login.focus();
        return false;
    }



    if(document.form1.pass.value=="")
    {
        alert("Please Enter confirm Password");
        document.form1.pass.focus();
        return false;
    }
    if(document.form1.login.value!=document.form1.pass.value)
    {
        alert("Confirm Password does not matched");
        document.form1.pass.focus();
        return false;
    }
    if(document.form1.name.value=="")
    {
        alert("Please Enter Your Name");
        document.form1.name.focus();
        return false;
    }

    if(document.form1.email.value=="")
    {
        alert("Please Enter your email id");
        document.form1.email.focus();
        return false;
    }
    e=document.form1.email.value;
    f1=e.indexOf('@');
    f2=e.indexOf('@',f1+1);
    e1=e.indexOf('.');
    e2=e.indexOf('.',e1+1);
    n=e.length;

    if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
    {
        alert("Please Enter valid Email");
        document.form1.email.focus();
        return false;
    }
    return true;
}
</script>
<link href="style.css" rel="stylesheet" type="text/css">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>

<body>
<center>
<div class="floating-box">
<h1><marquee bgcolor="yellow";font-size="700">signup Form</marquee></h1><br><br>
        
    <h1>Sign up <i class="fas fa-sign-in"></i><br><br></h1>
    <form name="form1" method="post" action="signupuser.php" onSubmit="return check();">


	<label for="pwd">User Id</label>
	<input type="text" id="name" name="user_id"><br><br>
	<label for="pwd">Password</label>
	<input type="password" id="login" name="login"><br><br>

	<label for="pwd">Confirm</label>
	<input type="password" id="pass" name="pass"><br><br>
	<label for="uname">Name</label>
	<input type="text" id="name" name="name"><br><br>


	<label for="uname">Email id</label>
	<input type="text" id="email" name="email"><br><br>

    <input name="login" type="submit" id="login"><br><br>
	<p>Already Register <a href="login.php"> Login here </a> </p>
    

</form>
</div>
</center>
</body>
</html>
