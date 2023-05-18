<?php
include("config.php");
$fees=$_POST['txtfees'];
$duration=$_POST['txtduration'];
$sql=mysqli_query($con,"SELECT  count(*) as count FROM tblsmartkidsfees WHERE fees='$fees'");
$rowset=mysqli_fetch_array($sql);
if($rowset['count']>0)
{

	echo"<script>alert('fees Details alraedy exist');window.location='feesview.php'</script>";
}
else
{
$sql=mysqli_query($con,"insert into tblsmartkidsfees(fees,duration)values('$fees','$duration')");
echo "<script>alert('Fees Registration Successfull!!!'); window.location='feesview.php'</script>";
}
?>