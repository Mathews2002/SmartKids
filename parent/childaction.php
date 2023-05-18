<?php
session_start();
include("config.php");
$parentid=$_SESSION['parentid'];
//echo $parentid;
$daycare=$_POST['drpdaycare'];

$childname=$_POST['txtchildname'];
$age=$_POST['txtage'];
$gender=$_POST['txtgender'];
$s="select ifnull(max(childregno),1000)+1 from tblsmartkidschildren";
$rr=mysqli_query($con,$s);
$t=mysqli_fetch_array($rr);


$sql=mysqli_query($con,"insert into tblsmartkidschildren(childregno,parentid,daycareid,childname,age,gender,status)values($t[0],'$parentid','$daycare','$childname','$age','$gender','Pending')");
echo "<script>alert('child Registration Successfull!!!'); window.location='index.php'</script>";

?>