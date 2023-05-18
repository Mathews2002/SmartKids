<?php
session_start(); 
include("header.php");
?>
<div class="content-body">
    <div class="container-fluid">
    <div class="row page-titles mx-0" style="background-color: #5944db;">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                    <h4 style="color:white;">ADD PROGRESS </h4>
                        
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
                <form action="progressaction.php" method="post">
<div class="form-row">
<div class="form-group col-md-6">
                            <label>Child</label>
                    <?php
                    include("config.php");
                    $subcategoryid = $_GET["subcategoryid"];
                    $_SESSION['subcategoryid']= $subcategoryid;
//new inserted code
                   $sql1 = "SELECT * FROM tblsmartkidssubcategory where subcategoryid=' $subcategoryid '";
                    $rr=mysqli_query($con,$sql1);
                    $r=mysqli_fetch_array($rr);
                    $_SESSION["subcatname"]=$r["subcategoryname"];
     //end of code


                    $daycareid=$_SESSION['daycareid'];
                    $course=mysqli_query($con,"select * from tblsmartkidschildren where daycareid='$daycareid'and status='Accepted' ");
                 
                    ?>
                    <select name="txtchildren" class="form-control" >
                        <option>Default select</option>
                        <?php 
                         while($display=mysqli_fetch_array($course)){
                            ?>
                        <option  value="<?php echo $display['childrenid'] ?>">
                        <?php echo $display['childname'] ?></option>
                        <?php
                        }
                        ?>
                    </select>

                            </div>
                          
                       
                          
                            <div class="form-group col-md-6">
                                <label>Category</label>
<input type="text"  name="txtcateory" value="<?php echo  $_SESSION['catname']; ?>" class="form-control" >

                            </div>
                            <div class="form-group col-md-6">
                                <label>Subcategory</label>
<input type="text"  name="txtsubcategory" value="<?php echo  $_SESSION['subcatname']; ?>" class="form-control" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Progress Grade</label>
<!-- <input type="text"  name="txtprogress" class="form-control" > -->
<select name="txtprogress" id=""> 
    <option >---CHOOSE GRADE---</option>
    <option value="A+">A+</option>
    <option value="A">A</option>
    <option value="B+">B+</option>
    <option value="B">B</option>
    <option value="C+">C+</option>
    <option value="C">C</option>
    <option value="D+">D+</option>
    <option value="D">D</option>

</select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Description</label>
<input type="text"  name="txtdescri" class="form-control" required>
                            
                            
                           
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