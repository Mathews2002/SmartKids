<?php
session_start();
include("config.php");
$id=$_POST['id'];
$_SESSION["childid"]=$id;
$sql="SELECT * FROM `tblsmartkidschildren` WHERE `childregno`='$id'";
$row=mysqli_query($con,$sql);
$display=mysqli_fetch_array($row);
$_SESSION["childname"]=$display['childname'];
?>
           
            <div class="row">
              <div class="form-group col-sm-7">
                <label for="card-holder"> childname</label>
                <input id="card-holder" type="text" class="form-control" style="width: 172%;" value="<?php echo $display['childname'] ?>" name="PaidAmount" readonly aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-7">
                <label for="card-holder">age</label>
                <input id="card-holder" type="text" class="form-control" style="width: 172%;"  value="<?php echo $display['age'] ?>" name="txtbalance" readonly aria-describedby="basic-addon1">
              </div>
              <br>

              <div class="form-group col-sm-7">
                <label for="card-holder">gender</label>
                <input id="card-holder" type="text" class="form-control" style="width: 172%;" value="<?php echo $display['gender'] ?>" name="txtamount" readonly placeholder="Enter Your Amount" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <br>

