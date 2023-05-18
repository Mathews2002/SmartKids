<?php
include("config.php");
session_start();  
if(isset($_POST["submit"]))
{
	
	$amount=$_POST['amount']; 
	$_SESSION["amount"]=$amount;
	//$Reading_id=$_POST['Reading_id'];
	//$consumernumber=$_POST['consumernumber'];
	//$consumerid=$_POST['consumerid'];
	
	$paymentdate=date("Y-m-d");
	$commemt="payment pending";
	$childid=$_SESSION["childid"];
	$feesid=$_SESSION["feesid"];
	$sql="INSERT INTO `tblsmartkidspayment`(`childid`, `feesid`,`paiddate`,`amount`, `paymentstatus`) VALUES
	('$childid','$feesid','$paymentdate','$amount','$commemt')";
	// echo $sql;
	//$sql1="UPDATE `tblaquasoftmonthlyreading` SET `payment_status`='Completed' WHERE `Reading_id`='$Reading_id'";

	
	// $sql = mysqli_query($con, "UPDATE `tbl_ monthly_reading` SET `paid_date`='$date',`pay_status`='$commemt' WHERE `Reading_id`='$Reading_id'");
	// $sql = mysqli_query($con, "UPDATE `tbl_consumer` SET `pay_status`='$commemt' WHERE `con_id`='$customer_id'");
	
	if(mysqli_query($con, $sql))
	{
		
		echo "<script>alert('Payment Completed');window.location='bill.php'</script>";    
	}
	
	else
	{
		echo "<script>alert('Payment Faild');window.location='bill.php'</script>";    

	}
}
