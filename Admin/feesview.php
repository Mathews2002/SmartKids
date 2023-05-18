<?php
    include("header.php");
    ?>
       
          <div class="content-body">
                <div class="container-fluid">
                <div class="row page-titles mx-0" style="background-color: #343957;">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        <h4 style="color: white;">FEES DETAILS</h4>
                     </div>
                    </div>
<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                       
                    </div>
</div>
                <form action="fees.php" method="post">
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
                                                <th scope="col">#</th>
                                                <th scope="col">Fees</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Actions</th>
</tr>
                                        </thead>
                                        <tbody>
                                        <?php
		include("config.php");
		$s=1;
		$sql=mysqli_query($con,"SELECT * FROM tblsmartkidsfees");
   		while($display=mysqli_fetch_array($sql))
   			{
?>
				<tr>
<tr>
                                            <td><?php echo $s++?></td>
				<td><?php echo $display["fees"]?></td>
				<td><?php echo $display["duration"]?></td>
                                                <td><div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action</button>
                                                    <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="feesedit.php?feesid=<?php echo $display['feesid'];?>">Edit</a> 
                                                    <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete?')" href="feesdelete.php?feesid=<?php echo $display['feesid'];?>">Delete</a>
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