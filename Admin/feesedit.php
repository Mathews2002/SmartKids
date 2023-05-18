<?php
    include("header.php");
    ?>
    <div class="content-body">
        <div class="container-fluid">
        <div class="row page-titles mx-0" style="background-color: #343957;">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        <h4 style="color: white;">EDIT FEES DETAILS</h4>
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
                            <?php
                            include("config.php");
                            if(isset($_GET["feesid"]))
                            {
                            $feesid=$_GET["feesid"];
                            // echo $feesid;
                            // exit;
                            $sql=mysqli_query($con,"SELECT * from tblsmartkidsfees WHERE feesid='$feesid'");
                            $display=mysqli_fetch_array($sql);
                            }
                            ?>
                        <form action="" method="POST">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Fees</label>
                                    <input type="text" class="form-control"  name="txtfees" value="<?php echo $display['fees'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label>Duration</label>
                                    <input type="text" class="form-control" name="txtduration" value="<?php echo $display['duration'];?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <!-- <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password"> -->
                                </div>
                                <div class="form-group col-md-6">
                                    <!-- <label>City</label>
                                    <input type="text" class="form-control"> -->
                                </div>
                            </div>
                            <div class="form-row">
                                <!-- <div class="form-group col-md-4">
                                    <label>State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div> -->
                                <!-- <div class="form-group col-md-2">
                                    <label>Zip</label>
                                    <input type="text" class="form-control">
                                </div> -->
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <!-- <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Check me out
                                    </label> -->
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            <button type="submit" class="btn btn-primary">cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
if (isset($_POST["submit"]))
{
	
	$fees=$_POST["txtfees"];
	$duration=$_POST["txtduration"];
	
	$sql=mysqli_query($con,"UPDATE tblsmartkidsfees SET fees='$fees', duration='$duration' WHERE feesid='$feesid'");
	if($sql)
	{
		echo "<script>alert('fees updated sucsessfullly!!!');window.location='feesview.php';</script>";
	}
}
include("footer.php");
?>