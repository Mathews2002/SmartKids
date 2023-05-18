<?php
include("config.php");
$daycarename=$_POST['txtdaycare'];
$district=$_POST['txtdistrict'];
$startingdate=$_POST['txtstartingdate'];
$registration=$_POST['txtregistration'];
$username=$_POST['txtusername'];
$password=$_POST['txtpassword'];
$email=$_POST['txtemail'];
$contact=$_POST['txtcontactno'];
$head=$_POST['txthead'];
$sql=mysqli_query($con,"SELECT  count(*) as count FROM tblsmartkidsdaycare WHERE daycarename='$daycarename'");
$rowset=mysqli_fetch_array($sql);
if($rowset['count']>0)
{

	echo"<script>alert('Daycare Details alraedy exist');window.location='daycareview.php'</script>";
}
else
{
$sql=mysqli_query($con,"insert into tblsmartkidsdaycare(daycarename,districtid,startingdate,dateofregistration,username,password,email,contactno,head)values('$daycarename','$district','$startingdate','$registration','$username','$password','$email','$contact','$head')");
echo "<script>alert('daycare Registration Successfull!!!'); window.location='daycareview.php'</script>";
}
?>