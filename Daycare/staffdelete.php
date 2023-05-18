<?php
include("config.php");
if(isset($_GET["staffid"]))
{
    $staffid=$_GET["staffid"];
    // sql to delete a record
    mysqli_query ($con,"delete from tblsmartkidsstaff where staffid= $staffid");
    
        echo "<script>window.location='staffview.php'</script>";	
			
}
?>