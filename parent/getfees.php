<?php
session_start();
include("config.php");
$id=$_POST['id'];
$_SESSION["feeid"]=$id;
$childid=$_SESSION["childid"];
$sql="SELECT * FROM `tblsmartkidsfees` WHERE `feesid`='$id'";

$sql1="select * from tblsmartkidspayment where feesid=$id and childid=$childid";
$row1=mysqli_query($con,$sql1);
$rcount=mysqli_num_rows($row1);
if($rcount==0)
{

$row=mysqli_query($con,$sql);
$display=mysqli_fetch_array($row);
$_SESSION["fees"]=$display['fees'];
$_SESSION["feesid"]=$id;
$_SESSION["duration"]=$display['duration'];

?>
           
            <div class="row">
              <div class="form-group col-sm-7" style="width: 172%;">
                <label for="card-holder"> childname</label>
                <input id="card-holder" type="text" class="form-control"  value="<?php echo $display['fees'] ?>" name="PaidAmount" readonly aria-describedby="basic-addon1">
              </div>
</div>
          <?php
          }
          else
          {
            echo "Already Paid.........";
          }
          ?>    

