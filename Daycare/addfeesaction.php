<?php
include("config.php");
$txtchild=$_POST['txtchild'];
$duration=$_POST['txtduration'];
$amount=$_POST['txtfees'];




$sql=mysqli_query($con,"INSERT INTO `tblsmartkidspayment`(`childid`, `feesid`, `paiddate`, `amount`, `paymentstatus`)values('$txtchild','$duration','0','$amount','pending')");
echo "<script>alert('fees Registration Successfull!!!'); window.location='addfees.php'</script>";

?>