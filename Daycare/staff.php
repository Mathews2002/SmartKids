<?php

include("header.php");
?>
<div class="content-body">
    <div class="container-fluid">
    <div class="row page-titles mx-0" style="background-color: #5944db;">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                    <h4 style="color:white;">STAFF REGISTRATION</h4>
                        
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
                <form action="staffaction.php" method="post">
<div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Staff Name</label>
                                <input type="text"  name="txtstaff" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 34px;">
                                <label>Gender</label>
<input type="radio"  name="txtgender"  placeholder="gender" value="Male">Male<input type="radio"  name="txtgender"  placeholder="gender" value="Female" required>Female
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
<input type="text"  name="txtemail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="must enter a valid email address" required>
                            </div>
                       
                            <div class="form-group col-md-6">
                            <label>District</label>
                    <?php
                    include("config.php");
                    $course=mysqli_query($con,"select * from tblsmartkidsdistrict");
                   
                    ?>
                    <select name="txtdistrict" class="form-control" >
                        <option>Default select</option>
                        <?php 
                         while($display=mysqli_fetch_array($course)){
                            ?>
                        <option  value="<?php echo $display['districtid'] ?>">
                        <?php echo $display['district'] ?></option>
                        <?php
                        }
                        ?>
                    </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label>Username</label>
<input type="text"  name="txtusername" class="form-control" required>
                            </div>
                            <!-- <div class="form-group col-md-6">
                                <label>Password</label>
<input type="text"  name="txtpassword" class="form-control" required>
                            </div> -->
                            <div class="form-group col-md-6">
                                <label>Place</label>
<input type="text"  name="txtplace" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Contact Number</label>
<input type="text"  name="txtcontactno" class="form-control" pattern="[0-9]{10}" required>
                            
                            
                           
                        </div>
                       
                       
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
</div>
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>