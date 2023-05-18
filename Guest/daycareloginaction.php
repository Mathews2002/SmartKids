<?php
session_start();
include("config.php");
if (isset($_POST[ "daycarelogin"]))
{
	$username=$_POST["txtusername"];
	$password=$_POST["txtpassword"];
	
	$result=mysqli_query($con,"SELECT * FROM `tblsmartkidsdaycare` WHERE username='$username' AND password='$password'");
	//echo  "SELECT * FROM `tblsmartkidsdaycare` WHERE username='$username' AND password='$password'";
	$row=mysqli_fetch_array($result);
	$_SESSION['daycareid']=$row["daycareid"];
	if($row>0)
	{//$daycareid=$row['daycareid'];
		//echo $daycareid;
		
		header("location:..\Daycare\index.php");
	}
	else
	{
	echo"<<script>alert('Invalid Username/Password!!');,location='daycarelogin.php'</script>";
    }
    }
    ?>