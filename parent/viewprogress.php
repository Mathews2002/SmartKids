<?php
session_start();
include("header.php");
?>
<div class="services news">
		<div class="container">   
			<h3 class="w3ls-title">VIEW PROGRESS</h3>  
			<div class="news-agileinfo">
			<?php
                    include("config.php");
					$parentid=$_SESSION['parentid'];

                    $sql = mysqli_query($con,"SELECT * FROM tblsmartkidsprogress p 
                    inner join tblsmartkidschildren c on p.childrenid=c.childrenid
                     inner join tblsmartkidscategory ca on p.categoryid=ca.categoryid 
                     inner join tblsmartkidssubcategory s on p.subcategoryid=s.subcategoryid
                      inner join tblsmartkidsstaff st on p.staffid=st.staffid where parentid='$parentid' ");
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
							<p><?php echo $diplay["categoryname"]?></p>
                            <p><?php echo $diplay["subcategoryname"]?></p>
                            <p >Staff:  <?php echo $diplay["staffname"]?></p>
						<button	a class="w3-agilebtn" style="background-color: aquamarine;" ><span><?php echo $diplay["progressgrade"]?></span></a></button>
						</div>
					</div>

				</div>
				
				
				<?php
}
?>
			</div>
		</div>
	</div>