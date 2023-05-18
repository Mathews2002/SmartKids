<?php
include("config.php");
if(isset($_POST["submit"]))
{
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
    $district=$_POST['drpdistrict'];
    $place=$_POST['place'];
    $phone=$_POST['phone'];
	$adharno=$_POST['adharno'];
    $username=$_POST['username'];
	//$password=$_POST['password'];
//username
	$sql=mysqli_query($con,"SELECT ifnull(count(*),0)+11 as count FROM tblsmartkidsparents");

$display=mysqli_fetch_array($sql);
$id=$display['count'];
$password="cust$name#@0";

     $sql=mysqli_query($con,"SELECT * FROM `tblsmartkidsparents` WHERE `email`='$email' or username='$username'");
  	 	$display=mysqli_fetch_array($sql);
  	 	if($display>0)
	 	{	
		echo "<script>alert('Already exist');window.location='parentreg.php'</script>";	
	 	}
	 	else 
		{
$sql=mysqli_query($con,"INSERT INTO `tblsmartkidsparents`(`parentname`, `email`, `username`, `password`, `district`, `place`, `contactno`, `aadharno`,homeaddres) 
VALUES('$name','$email','$username','$password','$district','$place','$phone','$adharno','$address')");
// echo "INSERT INTO `tblsmartkidsparents`(`parentname`, `email`, `username`, `password`, `district`, `place`, `contactno`, `aadharno`,homeaddres) 
//xxVALUES('$name','$email','$username','$password','$district','$place','$phone','$adharno','$address')";

$bodyContent="Dear $username, Your account has been successfully created, Please 
login using the username $username and Password $password";
$mailtoaddress=$email;
require('mailtemplate.php');
	echo"<script>alert('Details registered sucessfully!!');window.location='index.php'</script>";

	
         }
  }
?>