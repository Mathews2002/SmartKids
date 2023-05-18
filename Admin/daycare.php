<?php
include("header.php");
?>
<div class="content-body">
    <div class="container-fluid">
    <div class="row page-titles mx-0" style="background-color: #343957;">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        <h4 style="color: white;">DAYCARE REGISTRATIONS</h4>
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
                <form action="daycareaction.php" method="post">
<div class="form-row">
                            <div class="form-group col-md-6">
                                <label>DayCare Name</label>
                                <input type="text"  name="txtdaycare" class="form-control" placeholder="daycare" required>
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
                                <label>Starting Date</label>
<input type="date"  name="txtstartingdate" class="form-control" placeholder="startingdate" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Date of Registration</label>
<input type="date"  name="txtregistration" class="form-control" placeholder="registration" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Username</label>
<input type="text"  name="txtusername" class="form-control" placeholder="username" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Password</label>
<input type="text"  name="txtpassword" class="form-control" placeholder="password" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
<input type="text"  name="txtemail" class="form-control" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="must enter a valid email address" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Contact Number</label>
<input type="text"  name="txtcontactno" class="form-control" placeholder="contactno"  pattern="[0-9]{10}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Head</label>
<input type="text"  name="txthead" class="form-control" placeholder="head" required>
                            </div>
                            
                           
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