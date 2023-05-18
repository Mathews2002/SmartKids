<?php
session_start();
include("config.php");
$event= $_SESSION['eventid'];
$loc= "images/";
    $img=$_FILES['txt_image'] ['name'];
    move_uploaded_file($_FILES['txt_image']['tmp_name'],$loc.$img);
$sql=mysqli_query($con,"INSERT INTO `tblsmartkidsgallery`( eventid,`photo`)values('$event','$img')");
 "<script>alert(' Image Added!!!'); window.location='index.php'</script>";

?>