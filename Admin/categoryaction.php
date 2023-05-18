<?php
include("config.php");
$categoryname=$_POST['txtcategory'];
$description=$_POST['txtdescription'];
$sql=mysqli_query($con,"SELECT  count(*) as count FROM tblsmartkidscategory WHERE categoryname='$categoryname'");
$rowset=mysqli_fetch_array($sql);
if($rowset['count']>0)
{

	echo"<script>alert('Category Details alraedy exist');window.location='categoryview.php'</script>";
}
else
{
$sql=mysqli_query($con,"insert into tblsmartkidscategory(categoryname,description)values('$categoryname','$description')");
echo "<script>alert('category Registration Successfull!!!'); window.location='categoryview.php'</script>";
}
?>