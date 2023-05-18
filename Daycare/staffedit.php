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
                            if(isset($_GET["staffid"]))
                            {
                            $staffid=$_GET["staffid"];
                            // echo $staffid;
                            // exit;
                            $sql=mysqli_query($con,"SELECT * from tblsmartkidsstaff WHERE staffid='$staffid'");
                            $display=mysqli_fetch_array($sql);
                            }
                            ?>
                        <form action="" method="POST">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Staff Name</label>
                                    <input type="text" class="form-control"  name="txtstaff" value="<?php echo $display['staffname'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label>Gender</label>
                                    <input type="text" class="form-control"  name="txtgender" value="<?php echo $display['gender'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="text" class="form-control"  name="txtemail" value="<?php echo $display['email'];?>">
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
                                    <label>Username</label>
                                    <input type="text" class="form-control"  name="txtusername" value="<?php echo $display['username'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input type="text" class="form-control"  name="txtpassword" value="<?php echo $display['password'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label>Place</label>
                                    <input type="text" class="form-control"  name="txtplace" value="<?php echo $display['place'];?>">
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control"  name="txtcontactno" value="<?php echo $display['contactno'];?>">
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
    echo "aa";
	
$staffname=$_POST["txtstaff"];
$gender=$_POST["txtgender"];
$email=$_POST["txtemail"];
$district=$_POST["txtdistrict"];
$username=$_POST["txtusername"];
$password=$_POST["txtpassword"];
$place=$_POST["txtplace"];
$contactno=$_POST["txtcontactno"];

	
	
	$sql=mysqli_query($con,"UPDATE tblsmartkidsstaff SET staffname='$staffname', gender='$gender', email='$email',districtid='$district', username='$username', password='$password', place='$place', contactno='$contactno' WHERE staffid='$staffid'");
    //echo "UPDATE tblsmartkidsstaff SET staffname='$staffname', gender='$gender', email='$email',district='$district', username='$username', password='$password', place='$place', contactno='$contactno' WHERE staffid='$staffid'";
	if($sql)
	{
		echo "<script>alert('Staff updated sucsessfullly!!!');window.location='staffview.php';</script>";
	}
}
include("footer.php");
?>