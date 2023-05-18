<?php
session_start();
include("config.php");
$daycareid=$_SESSION['daycareid'];
$txtevent=$_POST['txtevent'];
$loc= "images/";
    $img=$_FILES['txt_image'] ['name'];
    move_uploaded_file($_FILES['txt_image']['tmp_name'],$loc.$img);
$sql=mysqli_query($con,"INSERT INTO `tblsmartkidsgallery`( `eventid`, `daycareid`, `photo`)values('$txtevent','$daycareid','$img')");
echo "<script>alert(' Image Added!!!'); window.location='index.php'</script>";

?>