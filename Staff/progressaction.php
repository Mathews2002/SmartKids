<?php
session_start();
include("config.php");
$daycareid=$_SESSION['daycareid'];
$staffid=$_SESSION['staffid'];

$children=$_POST['txtchildren'];
$category=$_SESSION['categoryid'];
$subcategory=$_SESSION['subcategoryid'];
$progress=$_POST['txtprogress'];
$des=$_POST['txtdescri'];

$sql=mysqli_query($con,"INSERT INTO `tblsmartkidsprogress`(`childrenid`, `categoryid`, `subcategoryid`, `progressgrade`, `description`, `daycareid`, `staffid`)
values('$children','$category','$subcategory','$progress','$des','$daycareid','$staffid')");
echo "<script>alert('Progress Added Successfuly!!!'); window.location='index.php'</script>";
?>