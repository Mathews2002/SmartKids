<?php
    include("header.php");
    ?>
    <div class="content-body">
        <div class="container-fluid">
        <div class="row page-titles mx-0" style="background-color: #343957;">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        <h4 style="color: white;">EDIT DAYCARE DETAILS</h4>
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
                            if(isset($_GET["daycareid"]))
                            {
                            $daycareid=$_GET["daycareid"];
                            // echo $daycareid;
                            // exit;
                            $sql=mysqli_query($con,"SELECT * from tblsmartkidsdaycare WHERE daycareid='$daycareid'");
                            $display=mysqli_fetch_array($sql);
                            }
                            ?>
                        <form action="" method="POST">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Daycare</label>
                                    <input type="text" class="form-control"  name="txtdaycare" value="<?php echo $display['daycarename'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                            <label>District</label>
                    <?php
                    include("config.php");
                    $course=mysqli_query($con,"select * from tblsmartkidsdistrict");
                   
                    ?>
                    <select name="txtdistrict" class="form-control" value="<?php echo $display['districtid'];?>" >
                       
                        <?php 
                         while($display1=mysqli_fetch_array($course)){
                            ?>
                        <option  value="<?php echo $display1['districtid'] ?>">
                        <?php echo $display1['district'] ?></option>
                        <?php
                        }
                        ?>
                    </select>

                            </div>
                                
                                <div class="form-group col-md-6">
                                    <label>Starting Date</label>
                                    <input type="date" class="form-control"  name="txtstartingdate" value="<?php echo $display['startingdate'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label>Date of Registration</label>
                                    <input type="date" class="form-control"  name="txtregistration" value="<?php echo $display['dateofregistration'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label>Username</label>
                                    <input type="text" class="form-control"  name="txtusername" value="<?php echo $display['username'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input type="text" class="form-control"  name="txtpassword" value="<?php echo $display['password'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="text" class="form-control"  name="txtemail" value="<?php echo $display['email'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control"  name="txtcontactno" value="<?php echo $display['contactno'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label>Head</label>
                                    <input type="text" class="form-control"  name="txthead" value="<?php echo $display['head'];?>">
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
	
$daycarename=$_POST["txtdaycare"];
$district=$_POST["txtdistrict"];
$startingdate=$_POST["txtstartingdate"];
$registration=$_POST["txtregistration"];
$username=$_POST["txtusername"];
$password=$_POST["txtpassword"];
$email=$_POST["txtemail"];
$contact=$_POST["txtcontactno"];
$head=$_POST["txthead"];
	
	
	$sql=mysqli_query($con,"UPDATE tblsmartkidsdaycare SET daycarename='$daycarename',districtid='$district', startingdate='$startingdate', dateofregistration='$registration', username='$username', password='$password', email='$email', contactno='$contact',head='$head' WHERE daycareid='$daycareid'");
	if($sql)
	{
		echo "<script>alert('daycare updated sucsessfullly!!!');window.location='daycareview.php';</script>";
	}
}
include("footer.php");
?>