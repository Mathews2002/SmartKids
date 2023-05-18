<?php
session_start();
    include("header.php");
    ?>
       
          <div class="content-body">
                <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                        </ol>
                    </div>
</div>
                <form action="addfees.php" method="post">
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
                                                <th scope="col">Name</th>
                                                <th scope="col">Fees</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Payment Satus</th>
</tr>
                                        </thead>
                                        <tbody>
                                        <?php
		include("config.php");
        echo $daycareid=$_SESSION['daycareid'];
		$s=1;
		$sql=mysqli_query($con,"SELECT * FROM tblsmartkidspayment p inner join tblsmartkidsfees f on p.feesid=f.feesid 
        inner join tblsmartkidschildren c on c.childrenid=p.childid where p.paymentstatus='pending' and c.daycareid='$daycareid'");
   		while($display=mysqli_fetch_array($sql))
   			{
?>
				<tr>
<tr>
                                            <td><?php echo $s++?></td>
                                            <td><?php echo $display["childname"]?></td>
                                            	<td><?php echo $display["amount"]?></td>
				<td><?php echo $display["duration"]?></td>
				<td><?php echo $display["paymentstatus"]?></td>
                                               
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