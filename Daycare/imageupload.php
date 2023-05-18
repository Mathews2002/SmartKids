
<?php
include("header.php");
?>
<div class="content-body">
    <div class="container-fluid">
    <div class="row page-titles mx-0" style="background-color: #343957;">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        <h4 style="color: white;">IMAGE UPLOAD</h4>
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
                <form action="imageaction.php" method="post" enctype="multipart/form-data">
<div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Event</label>
                                <?php
                    include("config.php");
                    $course=mysqli_query($con,"select * from tblsmartkidsevent");
                   
                    ?>
                    <select name="txtevent" id="txtevent" class="form-control"  >
                        <option>Default select</option>
                        <?php 
                         while($display=mysqli_fetch_array($course)){
                            ?>
                        <option  value="<?php echo $display['eventid'] ?>">
                        <?php echo $display['event'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Image</label>
                                <input type="file" class="form-control" name="txt_image" style="width:500px;" placeholder="Add image" required>                            </div>
                            
                           
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
