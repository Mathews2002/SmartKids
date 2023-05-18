<?php
include("config.php");
if(isset($_GET["feesid"]))
{
    $feesid=$_GET["feesid"];
    // sql to delete a record
    mysqli_query ($con,"delete from tblsmartkidsfees where feesid= $feesid");
    
        echo "<script>window.location='feesview.php'</script>";	
			
}
?>