<?php
include("config.php");
if(isset($_GET["daycareid"]))
{
    $daycareid=$_GET["daycareid"];
    // sql to delete a record
    mysqli_query ($con,"delete from tblsmartkidsdaycare where daycareid= $daycareid");
    
        echo "<script>window.location='daycareview.php'</script>";	
			
}
?>