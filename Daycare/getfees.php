<?php
include("config.php");
$feesid=$_POST['feesid'];
// echo $feesid;
?>

 <?php
     
     $sql=mysqli_query($con,"select * from tblsmartkidsfees  where feesid='$feesid'");
    //  echo "select * from tblsmartkidsfees  where feesid='$feesid'";
     $display=mysqli_fetch_array($sql);
    //  exit;
     ?>
 
      
                            <div class="form-group col-md-6">
                                <label>Fees</label>
<input type="text"  name="txtfees" class="form-control" value="<?php echo $display['fees'];?>">
                            </div>
   <!-- </div>-->
    
