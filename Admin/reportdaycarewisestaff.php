<?php
include("header.php");
include("config.php");
?>
<html>
<body>
<form method="POST" action="">
 <div class="container" style="margin-left:210px; margin-bottom:3%;padding-left:130px;  border-radius: 4px; top: 14px; margin-top: 5%;"><br>
    <h2 style="text-align: center;margin-top: 6%;">Daycare Based Staff</h2>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
       <label style="text-align: center;margin-left:-100%">Subject</label>
     </div>
     <div class="col-md-6">
       <select class="form-control" name="drp_daycare" id="drp_daycare" style="width:500px;" required autofocus>
         <option value="">--SELECT DAYCARE--</option>
         <?php
		  $sql=mysqli_query($con,"SELECT * FROM `tblsmartkidsdaycare`");
		  while($row=mysqli_fetch_array($sql))
		  {
			  ?>
         <option value="<?php echo $row["daycareid"]; ?>"><?php echo $row["daycarename"]; ?></option>
         <?php
		  }
		  
		?>
       </select>
     </div>
   </div>
    <br>
    
     <div class="row">
      <input type="submit" name="submit" value="View" class="btn btn-primary" style="margin-left: 60%;
    width: 120px;">
    </div>
   
    <br>
    <br>
    <br>
    
    
    
    <?php
	if(isset($_POST["submit"]))
	{
	$daycare=$_POST["drp_daycare"];
	
	
	?>
    
    <script>
	document.getElementById("drp_daycare").value="<?php echo $daycare ?>";
	</script>
    
    
     <table class="table table-hover" style="border: 2px solid #adaaaa;margin-left: 39px; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
          <thead>
            <tr>
          
              <th scope="col">Staff Name</th>
              <th scope="col">Userame</th>
               <th scope="col">Email</th>
            
          
            </tr>
          </thead>
          <?php
						$slno=1;
							$result=mysqli_query($con,"SELECT s.staffname,s.username,s.email,s.contactno FROM `tblsmartkidsstaff` s inner join tblsmartkidsdaycare d  on s.daycareid=d.daycareid where s.daycareid='$daycare'");
							while($row=mysqli_fetch_array($result))
							{
								?>
                <tr>
                               
                                <td> <?php echo $row["staffname"];?></td>
                                <td> <?php echo $row["username"];?></td>
                                <td> <?php echo $row["email"];?></td>
                               
                               <?php
								
								echo "</tr>";
								
							}
						?>
        </table>
    
    <?php
	}
	?>
    
    
    
    
  </div>   
</form>

</body>
</html>





<?php
include("footer.php");
?>