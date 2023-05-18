<?php
session_start();
include("config.php");
if (isset($_POST[ "stafflogin"]))
{
	$username=$_POST["txtusername"];
	$password=$_POST["txtpassword"];
	
	$result=mysqli_query($con, "SELECT * FROM `tblsmartkidsstaff` WHERE username='$username' AND password='$password'");
	$row=mysqli_fetch_array($result);
	if($row>0)
	{$staffid=$row["staffid"];
		//echo $parentid;
		$_SESSION['staffid']=$staffid;
		//echo $staffid;
		$daycareid=$row["daycareid"];
		//echo $parentid;
		$_SESSION['daycareid']=$daycareid;
		header("location:..\Staff\index.php");
	}
	else
	{
	echo"<<script>alert('Invalid Username/Password!!');,location='stafflogin.php'</script>";
    }
    }
    ?>