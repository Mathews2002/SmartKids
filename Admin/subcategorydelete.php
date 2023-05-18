<?php
include("config.php");
if(isset($_GET["subcategoryid"]))
{
    $subcategoryid=$_GET["subcategoryid"];
    // sql to delete a record
    mysqli_query ($con,"delete from tblsmartkidssubcategory where subcategoryid= $subcategoryid");
    
        echo "<script>window.location='subcategoryview.php'</script>";	
			
}
?>