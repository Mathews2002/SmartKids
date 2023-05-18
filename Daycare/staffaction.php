<?php
session_start();
include("config.php");
$staffname=$_POST['txtstaff'];
$daycareid=$_SESSION['daycareid'];
$gender=$_POST['txtgender'];
$email=$_POST['txtemail'];
$district=$_POST['txtdistrict'];
$username=$_POST['txtusername'];
//$password=$_POST['txtpassword'];
$place=$_POST['txtplace'];
$contactno=$_POST['txtcontactno'];
$password="cust$username#@0";

// $sql=mysqli_query($con,"SELECT  count(*) as count FROM tblsmartkidsstaff WHERE staffname='$staffname'");
// $rowset=mysqli_fetch_array($sql);
// if($rowset['count']>0)
// {
// 	echo"<script>alert('Already Exists')";
// }

$sql=mysqli_query($con,"SELECT ifnull(count(*),0)+11 as count FROM tblsmartkidsstaff");

$display=mysqli_fetch_array($sql);
$id=$display['count'];
$password="cust$staffname#@0";
     $sql=mysqli_query($con,"SELECT * FROM `tblsmartkidsstaff` WHERE `email`='$email' ");
  	 	$display=mysqli_fetch_array($sql);
  	 	if($display>0)
{

	echo"<script>alert('Staff Details alraedy exist');window.location='staffview.php'</script>";
}
else
{
$sql=mysqli_query($con,"insert into tblsmartkidsstaff(staffname,daycareid,gender,email,districtid,username,password,place,contactno)values('$staffname','$daycareid','$gender','$email','$district','$username','$password','$place','$contactno')");
echo "insert into tblsmartkidsstaff(staffname,daycareid,gender,email,district,username,password,place,contactno)values('$staffname','$daycareid','$gender','$email','$district','$username','$password','$place','$contactno')";
$bodyContent="Dear $username, Your account has been successfully created, Please 
login using the username $username and Password $password";
$mailtoaddress=$email;
require('mailtemplate.php');
echo "<script>alert('staff Registration Successfull!!!'); window.location='staffview.php'</script>";
}
?>

