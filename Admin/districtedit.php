<?php
    include("header.php");
    ?>
    <div class="content-body">
        <div class="container-fluid">
        <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div>
            <div class="card" style="color: blue;">
                <div class="card-header">
                    <h4 class="card-title">Horizontal Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                            <?php
                            include("config.php");
                            if(isset($_GET["districtid"]))
                            {
                            $districtid=$_GET["districtid"];
                            // echo $districtid;
                            // exit;
                            $sql=mysqli_query($con,"SELECT * from tblsmartkidsdistrict WHERE districtid='$districtid'");
                            $display=mysqli_fetch_array($sql);
                            }
                            ?>
                        <form action="" method="POST">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>District</label>
                                    <input type="text" class="form-control"  name="txtdistrict" value="<?php echo $display['district'];?>">
                                </div><br>
                                
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
	
	$district=$_POST["txtdistrict"];
	
	
	$sql=mysqli_query($con,"UPDATE tblsmartkidsdistrict SET district='$district' WHERE districtid='$districtid'");
	if($sql)
	{
		echo "<script>alert('district updated sucsessfullly!!!');window.location='districtview.php';</script>";
	}
}
include("footer.php");
?>