<?php
session_start();
include("header.php");
?>
<div class="services news">
		<div class="container">   
			<h3 class="w3ls-title">DETAILS</h3>  
			<div class="news-agileinfo">
			<?php
                    include("config.php");
					$parentid=$_SESSION['parentid'];

                    $sql = mysqli_query($con,"SELECT * FROM tblsmartkidschildren where parentid='$parentid' ");
                    ?>
                    <?php
                    while ($diplay = mysqli_fetch_array($sql))

{
    ?>
				<div class="col-sm-4 news-w3lgrids">
                   
                   <div class="news-gridtext">
						
						<div class="news-w3imgtext">
							<h5 class="w3-agilep"></h5>
							<h4><a href="single.html"><?php echo $diplay["childname"]?></a></h4> 
							<p><?php echo $diplay["age"]?></p>
						<button	a class="w3-agilebtn" style="background-color: aquamarine;" ><span><?php echo $diplay["status"]?></span></a></button>
						</div>
					</div>

				</div>
				
				
				<?php
}
?>
			</div>
		</div>
	</div>