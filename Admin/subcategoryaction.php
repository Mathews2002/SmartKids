<?php
include("config.php");
session_start();
    $category=$_SESSION['categoryid'];
$subcategoryname=$_POST['txtsubcategoryname'];
$sql=mysqli_query($con,"SELECT  count(*) as count FROM tblsmartkidssubcategory WHERE subcategoryname='$subcategoryname'");
$rowset=mysqli_fetch_array($sql);
if($rowset['count']>0)
{

	echo"<script>alert('Sub Category Details alraedy exist');window.location='subcategoryview.php'</script>";
}
else
{
$sql=mysqli_query($con,"insert into tblsmartkidssubcategory(subcategoryname,categoryid)values('$subcategoryname',' $category')");
echo "<script>alert('Sub category Registration Successfull!!!'); window.location='subcategoryview.php'</script>";
}
?>