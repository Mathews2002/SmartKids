<?php
include("config.php");
if(isset($_POST["accept"]))
{
	$childrenid=$_POST["txtchildrenid"];

	
	// echo $s_id;
	$sql=mysqli_query($con,"update tblsmartkidschildren set status='Accepted' where childrenid='$childrenid'");
	echo "update tblsmartkidschildren set status='accepted' where childrenid='$childrenid'";


	if($sql)
	{
		echo"<script>alert('Student Details Accepted succesfully!!');window.location='childapproval.php'</script>";
	} 
	
}
?>
