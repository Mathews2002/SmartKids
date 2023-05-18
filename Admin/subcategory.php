<?php
include("header.php");
?>
<div class="content-body">
    <div class="container-fluid">
    <div class="row page-titles mx-0" style="background-color: #343957;">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        <h4 style="color: white;">SUBCATEGORY REGISTRATIONS</h4>
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
                <form action="subcategoryaction.php" method="post">
<div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Sub Category</label>
                                <input type="text"  name="txtsubcategoryname" class="form-control" placeholder="subCategoryname" required>
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