<?php
session_start();
include("header.php");
?>
<div class="content-body">
    <div class="container-fluid">
    <div class="row page-titles mx-0" style="background-color: #5944db;">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                    <h4 style="color:white;">FEES</h4>
                      
                    </div>
</div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                  
                </div>
            </div>
<div class="card" style="color: blue;">
            <div class="card-header">
                <h4 class="card-title"></h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                <form action="addfeesaction.php" method="post">
<div class="form-row">
<div class="form-group col-md-6">
                            <label>Duration</label>
                    <?php
                    include("config.php");
                    $course=mysqli_query($con,"select * from tblsmartkidsfees");
                   
                    ?>
                    <select name="txtduration" id="txtfees" class="form-control"  onchange="populate()">
                        <option>Default select</option>
                        <?php 
                         while($display=mysqli_fetch_array($course)){
                            ?>
                        <option  value="<?php echo $display['feesid'] ?>">
                        <?php echo $display['duration'] ?></option>
                        <?php
                        }
                        ?>
                    </select>

                            </div>
                            <div id="chkboxContainer">
                            <div class="form-group col-md-6">
                                <label>Fees</label>
<input type="text"  name="txtfees" class="form-control" >
                            </div>
                            </div>
                            <div class="form-group col-md-6">
                            <label>Child Name</label>
                    <?php
                    include("config.php");
                    $daycareid=$_SESSION['daycareid'];

                    $course=mysqli_query($con,"SELECT * FROM tblsmartkidschildren where daycareid='$daycareid' and status='Accepted'");
                   
                    ?>
                    <select name="txtchild" class="form-control" >
                        <option>Default select</option>
                        <?php 
                         while($display=mysqli_fetch_array($course)){
                            ?>
                        <option  value="<?php echo $display['childrenid'] ?>">
                        <?php echo $display['childname'] ?></option>
                        <?php
                        }
                        ?>
                    </select>

                            </div>
                           
                        </div>
                       
                       
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
</div>
            </div>
        </div>
    </div>
</div>
<script>

function populate()
	{
		var val=document.getElementById('txtfees').value;
		// alert(val);
		$.ajax({
			type: "POST",
			url: "getfees.php",
			data: "feesid="+val,
			
			success: function(data){
				$("#chkboxContainer").html(data);
			}
		})
	}
 </script>
<?php
include("footer.php");
?>