<?php
session_start();
    include("header.php");
    ?>
       
          <div class="content-body">
                <div class="container-fluid">
                <div class="row page-titles mx-0" style="background-color: #5944db;">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        <h4 style="color:white;">STAFF DETAILS</h4>
                         
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
                                <button type="submit" class="btn btn-rounded btn-primary"><span
                                        class="btn-icon-left text-info"><i class="fa fa-plus color-info"> </i>
                                </span>Add </button>
                                
                                </div>
<table class="table">
                                        <thead class="thead-primary">
                                            <tr>
                                            <th scope="col">SL NO.</th>    
                                            <th scope="col">Staffname</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Daycare</th>
                                                <th scope="col">District</th>
                                                <th scope="col">Place</th>
                                                <th scope="col">Contact No.</th>
                                                <th scope="col">Actions</th>
</tr>
                                        </thead>
                                        <tbody>
                                        <?php
		include("config.php");
		$s=1;
        echo $daycareid=$_SESSION['daycareid'];
		$sql=mysqli_query($con,"SELECT s.email,s.staffname,s.gender,d.daycarename,sd.district,s.place,s.contactno,s.staffid FROM tblsmartkidsstaff s inner join tblsmartkidsdaycare d on s.daycareid=d.daycareid inner join tblsmartkidsdistrict sd on sd.districtid=s.districtid where s.daycareid='$daycareid'");
        //echo "SELECT * FROM tblsmartkidsstaff s inner join tblsmartkidsdaycare d on s.daycareid=d.daycareid inner join tblsmartkidsdistrict sd on sd.districtid=s.districtid where s.daycareid='$daycareid'";
   		while($display=mysqli_fetch_array($sql))
   			{
?>
				<tr>
<tr>
                                            <td><?php echo $s++?></td>
				<td><?php echo $display["staffname"]?></td>
				<td><?php echo $display["gender"]?></td>
                <td><?php echo $display["email"]?></td>
                <td><?php echo $display["daycarename"]?></td>
                <td><?php echo $display["district"]?></td>
				<td><?php echo $display["place"]?></td>
                <td><?php echo $display["contactno"]?></td>
                
                <td><div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action</button>
                                                    <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="staffedit.php?staffid=<?php echo $display['staffid'];?>">Edit</a> 
                                                    <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete?')" href="staffdelete.php?staffid=<?php echo $display['staffid'];?>">Delete</a>
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