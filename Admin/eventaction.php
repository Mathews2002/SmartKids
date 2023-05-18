<?php
include("config.php");
$event=$_POST['txtevent'];

$loc= "images/";
    $img=$_FILES['txt_image'] ['name'];
    move_uploaded_file($_FILES['txt_image']['tmp_name'],$loc.$img);
$sql=mysqli_query($con,"INSERT INTO `tblsmartkidsevent`(`event`, `eventimage`)values('$event','$img')");
echo "<script>alert(' Image Added!!!'); window.location='index.php'</script>";

?>