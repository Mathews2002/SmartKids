<?php
include("config.php");
if(isset($_GET["pid"]))
{
	$paymentid=$_GET["pid"];

	
	// echo $s_id;
	$sql=mysqli_query($con,"update tblsmartkidspayment set paymentstatus='paid' where paymentid='$paymentid'");
	//echo "update tblsmartkidspayment set status='accepted' where paymentid='$paymentid'";


	if($sql)
	{
		echo"<script>alert('Fees Accepted succesfully!!');window.location='feesapproval.php'</script>";
	} 
	
}
?>
