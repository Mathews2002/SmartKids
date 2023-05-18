<?php
include("config.php");
if(isset($_GET["eventid"]))
{
    $eventid=$_GET["eventid"];
    // sql to delete a record
    mysqli_query ($con,"delete from tblsmartkidsevent where eventid= $eventid");
    
        echo "<script>window.location='eventview.php'</script>";	
			
}
?>