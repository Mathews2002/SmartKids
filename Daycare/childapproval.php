
<?php
session_start();
    include("header.php");
    ?>
       
          <div class="content-body">
                <div class="container-fluid">
                <div class="row page-titles mx-0" style="background-color: #5944db;">
                    <div class="col-sm-6 p-md-0">
                    <div class="welcome-text" >
                        <h4 style="color:white;">CHILD APPROVAL</h4>
                       
                    </div>
                       
                    </div>
<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                       
                    </div>
</div>
                <form action="staff.php" method="post">
                <div class="row">
                  <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
<h4 class="card-title"></h4>
                               
                                
                                </div>
<table class="table">
                                        <thead class="thead-primary">
                                            <tr>
                                              <th>Sl.No</th>
                                            <th>Name</th>
                        <th>Age</th>
                        
                        <th>Actions</th>
</tr>
                                        </thead>
                                        <tbody>
                                        <?php
		include("config.php");
    $daycareid=$_SESSION['daycareid'];

		$s=1;
		$sql=mysqli_query($con,"SELECT * FROM tblsmartkidschildren where daycareid='$daycareid' and status='pending'");
    
   
   		while($display=mysqli_fetch_array($sql))
   			{
?>
				<tr>
<tr>
                                            <td><?php echo $s++?></td>
				
                                           
                      <td><?php echo $display["childname"]?></td>
                      <td><?php echo $display["age"]?></td>
              
                                                  
                                                    <td><a style='color:#090' href="childapprovalviewmore.php?childrenid=<?php echo $display['childrenid'];?>">View More</a> </td>

                                                    
                                                    
                                                </td>
                                            </tr>
                                            <div class="card">
</tbody>
                                        <?php
								echo "</tr>";
								
							}
						?>
                                    </table>
</div>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </form>
</div>
              </div>
          </div>
       
<?php
    include("footer.php");
    ?>
