<?php
include("header.php");
?>
<div class="content-body">
    <div class="container-fluid">
    <div class="row page-titles mx-0" style="background-color: #343957;">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        <h4 style="color: white;">CATEGORY REGISTRATIONS</h4>
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
                <form action="categoryaction.php" method="post">
<div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Category</label>
                                <input type="text"  name="txtcategory" class="form-control" placeholder="Category" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Description</label>
<input type="text" name="txtdescription" class="form-control" placeholder="Description" required>
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