<?php
session_start();
include("config.php");
if (isset($_POST[ "parentlogin"]))
{
	$username=$_POST["txtusername"];
	$password=$_POST["txtpassword"];
	
	$result=mysqli_query($con, "SELECT * FROM `tblsmartkidsparents` WHERE username='$username' AND password='$password'");
	$row=mysqli_fetch_array($result);
	if($row>0)
	{
		$parentid=$row["parentid"];
		//echo $parentid;
		$_SESSION['parentid']=$parentid;
		header("location:..\Parent\index.php");
	}
	else
	{
	echo"<<script>alert('Invalid Username/Password!!');,location='parentlogin.php'</script>";
    }
    }
    ?>