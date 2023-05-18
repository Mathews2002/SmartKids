<!-- services -->   	
<?php
session_start();
include('header.php');
?>
<div class="services">   
		<div class="container">
			<h3 class="w3ls-title">EVENTS</h3>	 
			<div class="services-agileinfo">  
            <?php
                    include("config.php");
					$parentid=$_SESSION['parentid'];
                    $daycareid=$_SESSION['daycareid'];
                    $sql = mysqli_query($con,"SELECT * FROM  tblsmartkidsevent");

                   // echo "SELECT * FROM tblsmartkidsgallery g  inner join tblsmartkidsevent e on e.eventid=g.eventid '";
                    ?>
                   
		<?php
		while ($display = mysqli_fetch_array($sql)) {
		?>
				<div class="col-md-3 col-sm-3 col-xs-6 services-w3lsgrids"> 
			
             <a href="gallery.php?id=<?php echo $display["eventid"] ?>"><img class="img-responsive mix-in"  src="../Admin/images/<?php echo $display["eventimage"] ?>" alt=""></a>
						<br><br>
						<h5 style="color: white;
    margin-left: 98px;"><?php echo $display["event"] ?></h5>  

		</div>
	
				
				
				
		<?php
}
?>
				<div class="clearfix"> </div> 
                	

			</div>
			
		</div>
	
	</div>
    <?php
include('footer.php');
?>
					
						<i class="fa fa-map" aria-hidden="true"></i> 
						<h5>Playing</h5> 
					</div>
				</div>



