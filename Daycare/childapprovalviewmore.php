


<?php
include("header.php");
?>
<div class="content-body">
    <div class="container-fluid">
    <div class="row page-titles mx-0" style="background-color: #5944db;">
                <div class="col-sm-6 p-md-0" >
                    <div class="welcome-text">
                        <h4 style="color:white;">DETAILS</h4>
                       
                    </div>
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
<?php
include("config.php");

if(isset($_GET["childrenid"]))
{
     $childrenid=$_GET["childrenid"];

     $sql=mysqli_query($con,"SELECT * FROM tblsmartkidschildren c inner join tblsmartkidsparents p on p.parentid=c.parentid where c.childrenid='$childrenid'" );
     
     $display=mysqli_fetch_array($sql);
     
?>
 <div class="form-group col-md-6">
                            <label>Parent Name</label>
<input type="text"  name="txtparentname" class="form-control" value="<?php echo $display['parentname'];?>" readonly>
<input type="hidden"  name="txtchildrenid" class="form-control" value="<?php echo $childrenid;?>" readonly>

                            </div>
                            <?php
                        }
                        ?>
                            <br><br>
                            <div class="form-group col-md-6">
                                <label>Child Name</label>
                                <input type="text"  name="txtchildname" class="form-control" value="<?php echo $display['childname'];?>" readonly>
                            </div>
                           
                            <div class="form-group col-md-6" >
                                <label>Child Gender</label>
<input type="text"  name="txtchildgender" class="form-control"  value="<?php echo $display['gender'];?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Child Age</label>
<input type="text"  name="txtchildage" class="form-control" value="<?php echo $display['age'];?>" readonly>
                            </div>
                           
                            <div class="form-group col-md-6">
                                <label>District</label>
<input type="text"  name="txtdistrict" class="form-control" value="<?php echo $display['district'];?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Place</label>
<input type="text"  name="txtplace" class="form-control" value="<?php echo $display['place'];?>" readonly>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label>Contact Number</label>
<input type="text"  name="txtcontactno" class="form-control" value="<?php echo $display['contactno'];?>" readonly>
                            
                            
                           
                        </div>
                       
                       <div style="margin-top: 28px;">
                        <input type="submit" name="accept" value="Accept" class="btn btn-primary" formaction="childreqaccept.php" >
</div>
<div style="margin-left: 9px;margin-top: 28px;">
                        <input type="submit" name="reject" value="Reject" class="btn btn-primary" formaction="childreqreject.php" >
</div>
                    </form>
</div>
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>