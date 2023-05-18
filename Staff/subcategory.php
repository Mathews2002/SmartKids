<?php
session_start();
include("header.php");
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="parent/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="parent/css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="parent/css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<!-- //Custom Theme files --> 
<!-- js -->
<script src="parent/js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
<div class="services">   
		<div class="container">
			<h3 class="w3ls-title">Our Services</h3>
            <?php
            include("config.php");
            $categoryid = $_GET["categoryid"];
echo $_SESSION['categoryid']= $categoryid;

//new inserted code
$sql1 = "SELECT * FROM tblsmartkidscategory where categoryid='$categoryid'";
//echo "SELECT * FROM tblsmartkidscategory where categoryid='$categoryid'";
$rr=mysqli_query($con,$sql1);
$r=mysqli_fetch_array($rr);
$_SESSION["catname"]=$r["categoryname"];
//end of code

                    $sql = mysqli_query($con,"SELECT * FROM tblsmartkidssubcategory where categoryid='$categoryid'");
                    ?>
                    <?php
                    while ($diplay = mysqli_fetch_array($sql))

{
    ?> 	 
			<div class="services-agileinfo"> 
           
				<div class="col-md-3 col-sm-3 col-xs-6 "> 
					<div class="services-w3text"> 
						<i class="fa fa-cutlery" aria-hidden="true"> </i> 

						<h5><?php echo $diplay["subcategoryname"]?></h5> 
                        <a  href="progress.php?subcategoryid=<?php echo $diplay["subcategoryid"]?>">View</a> 
 
					</div>
				</div>
				
              

				<div class="clearfix"> </div> 
			</div>
            <?php
}
?>
     
		</div>
	</div>  
</body>
</html>
<?php
include("footer.php");
?>