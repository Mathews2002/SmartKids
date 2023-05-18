<?php
    include("header.php");
    include("config.php");
    ?>  
    <div class="content-body">
        <div class="container-fluid">
        <div class="row page-titles mx-0" style="background-color: #343957;">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        <h4 style="color: white;"> SUBCATEGORY DETAILS</h4>
                        
                     </div>
                    </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               
            </div>
        </div>
        <form action="" method="POST">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <!-- <h4>Hi, welcome back</h4>
                        <p class="mb-0">Your business dashboard template</p> -->
                        <?php
                        $sql=mysqli_query($con,"select * from tblsmartkidscategory");
                        ?>
                        <select name="drpcategory" class="form-control" onchange="this.form.submit()" style="width:500px;" >
                        <option value="0">---Category---</option>
                        <?php
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>
                        <option value="<?php echo $row['categoryid'] ?>"> <?php echo $row['categoryname'];?> </option>
                        <?php
                        }
                        ?>
                        </select>
                    </div><br><br>
                    <!-- <input type="submit" name="btnsubmit" value="Submit"  class="btn btn-primary" style="margin-left:63%;margin-bottom:2%"> -->

                </div>
            </div>
        </form>
       
        <?php
        if(isset($_POST["drpcategory"]))
        {
            $category=$_POST["drpcategory"];
            // $todate=$_POST["todate"]; 
            $_SESSION['categoryid']=$category;
            // $_SESSION['tdate']=$todate;
            $s=1;
            
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"></h4>
                        <a href="subcategory.php"><button type="button" class="btn btn-rounded btn-primary"><span
                                class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </span>Add</button></a>
                        </div>
                    <div class="card-body">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Sub category Name</th>
                            
                                        
                                        <th scope="col">Actions</th>
                                        <!-- <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Actions</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql=mysqli_query($con,"SELECT * FROM tblsmartkidssubcategory WHERE categoryid='$category'");
                                    // console.log($sql);
                                    while($display=mysqli_fetch_array($sql))
                                    {
                                        echo "<tr>";
                                        echo"<td>".$s++."</td>";
                                        echo "<td>".$display["subcategoryname"]."</td>";
                                        ?>
                                        <td>
                                        <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="subcategoryedit.php?subcategoryid=<?php echo $display['subcategoryid']; ?>">Edit</a>
                                            <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete?')" href="subcategorydelete.php?subcategoryid=<?php echo $display['subcategoryid']; ?>">Delete</a>

                                        </div>
                                    </div>
                                </td>
                        </tr>
                                <?php
                                                
                                    }
                                    echo "</table>";
                                    }
                                    ?>
                                    <!-- <div class="card"> -->                        
                                </tbody>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<?php
    include("footer.php");
    
?>