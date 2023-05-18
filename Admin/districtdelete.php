<?php
include("config.php");
if(isset($_GET["districtid"]))
{
    $districtid=$_GET["districtid"];
    // sql to delete a record
    mysqli_query ($con,"delete from tblsmartkidsdistrict where districtid= $districtid");
    
        echo "<script>window.location='districtview.php'</script>";	
			
}
?>