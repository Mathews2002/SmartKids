<?php
include("config.php");
if (isset($_POST[ "btnlogin"]))
{
	$username=$_POST["txtusername"];
	$password=$_POST["txtpassword"];
	
	$result=mysqli_query($con, "SELECT * FROM ` tblsmartkidsadminlogin` WHERE username='$username' AND password='$password'");
	$row=mysqli_fetch_array($result);
	if($row>0)
	{
		header("location:..\admin\index.php");
	}
	else
	{
	echo"<<script>alert('Invalid Username/Password!!');,location='admin_login.php'</script>";
    }
    }
    ?>