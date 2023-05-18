<?php
    include("header.php");
    ?>
       
          <div class="content-body">
                <div class="container-fluid">
                <div class="row page-titles mx-0" style="background-color: #343957;">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        <h4 style="color: white;"> DAYCARE DETAILS</h4>
                     </div>
                    </div>
                   
<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                      
                    </div>
</div>
                <form action="daycare.php" method="post">
                <div class="row">
                  <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
<h4 class="card-title"></h4>
                                <button type="submit" class="btn btn-rounded btn-primary"><span
                                        class="btn-icon-left text-info"><i class="fa fa-plus color-info"> </i>
                                </span>Add </button>
                            
                                
                                </div>
<table class="table">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th scope="col">Sl No</th>
                                                <th scope="col">DayCare Name</th>
                                                <th scope="col">District</th>
                                                <th scope="col">Starting Date</th>
                                                <th scope="col">Date of Registration</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Password</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Contact Number</th>
                                                <th scope="col">Head</th>
                                                <th scope="col">Actions</th>
</tr>
                                        </thead>
                                        <tbody>
                                        <?php
		include("config.php");
		$s=1;
		$sql=mysqli_query($con,"SELECT * FROM tblsmartkidsdaycare D INNER JOIN tblsmartkidsdistrict dt on d.districtid=dt.districtid");
   		while($display=mysqli_fetch_array($sql))
   			{
?>
				<tr>
<tr>
                                            <td><?php echo $s++?></td>
				<td><?php echo $display["daycarename"]?></td>
                <td><?php echo $display["district"]?></td>
				<td><?php echo $display["startingdate"]?></td>
                <td><?php echo $display["dateofregistration"]?></td>
				<td><?php echo $display["username"]?></td>
                <td><?php echo $display["password"]?></td>
				<td><?php echo $display["email"]?></td>
                <td><?php echo $display["contactno"]?></td>
				<td><?php echo $display["head"]?></td>
                                                <td><div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action</button>
                                                    <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="daycareedit.php?daycareid=<?php echo $display['daycareid'];?>">Edit</a> 
                                                    <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete?')" href="daycaredelete.php?daycareid=<?php echo $display['daycareid'];?>">Delete</a>
                                                    </div>
                                                    </div>
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