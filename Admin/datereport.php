
<?php

include("config.php");
include("header.php");
?>
<!doctype html>
<html>
 <head>
 <meta charset="utf-8">
 <title></title>
 <style>
td, th {
	width: 200px
}
</style>
 </head>
 
 <body>
 
 <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
 
    <div class="container" style="width:95%; margin-left:22% ;box-sizing:border-box; margin-bottom:2%;  border-radius: 4px; margin-top: 3%;">
    <form action="" method="post" enctype="multipart/form-data">
     
     <div class="row" style="margin-left: -160%;margin-top: 2%;margin-bottom: -1%;">
       <!-- <input type="submit" name="addnew" value="EXPORT"  class="btn btn-primary" style="margin-left: 65%;
    width: 805px;"> -->
     </div> 
     </form>
     <form action="" method="post" enctype="multipart/form-data">
     <h2 style="text-align: center;margin-top: 7%;margin-left:-7%;font-family: fantasy;">PAYMENT REPORT BETWEEN 2 DATES</h2>
     <br>
     <div class="row">
       <div class="col-md-3" style="text-align:right">
         <label style="text-align: center;margin-left:-100%">From Date</label>
       </div>
       <div class="col-md-6">
         <input type="date" class="form-control" id="txt_bookcode" name="fromdate" style="width:500px;" placeholder="Enter bookcode"  required>
       </div>
     </div>
     <br />
     <div class="row">
       <div class="col-md-3" style="text-align:right">
         <label style="text-align: center;margin-left:-100%">To Date </label>
       </div>
       <div class="col-md-6">
         <input type="date" class="form-control" id="txt_bookcode" name="todate" style="width:500px;" placeholder="Enter bookcode"  required>
       </div>
     </div>
  
   <br >
   <br >
   <br >
   <div class="row" style="margin-left:-8%;margin-top:-7%;margin-bottom:-5%">
   <br>
   <br>
     <div class="col-md-2">
       <input type="submit" name="View" value="Show" style="margin-top: 25px;margin-left: 794px;" class="btn btn-primary" >
       &nbsp;&nbsp;&nbsp; </div>
   </div>
 </form>
 
 <?php
if(isset($_POST["View"]))
{

$fromdate=$_POST["fromdate"];
$todate=$_POST["todate"];
$_SESSION["fromdate"]=$fromdate;
$_SESSION["todate"]=$todate;
?>
 <script>
document.getElementById("fromdate").value="<?php echo $fromdate ?>";
document.getElementById("todate").value="<?php echo $todate ?>";
</script>
<!-- excel -->
<form action="Excel/exceldatereport.php" method="post">
<div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div>

                 
 <div class="container"  style="width:100%;  margin-left: 81px;" >
   <div class="row">
   <div class="col-md-12" style=" border-radius:15px; top: 106px;    margin-bottom: 59px;">
  <div class="row" style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
      <!-- <input type="submit" name="addnew" value="Export" class="btn btn-primary" style="margin-left:63%"> -->
    </div>
    <!-- end excel -->
     <h3 style="text-align: center;;margin-left: -4%;margin-top:5%;padding-bottom
	:5%;margin-right:20%">CHILD DETAILS</h3>
     <br>
     
     <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%;margin-left: -7%">
       <thead>
         <tr>
           <th scope="col">Sl No</th>
           <th>child</th>
           <th>Age</th>
           <th>Parent</th>
           <th>Daycare</th>
           <th> Amount</th>
           <th>Paid Date</th>
         
         </tr>
       </thead>
       <?php
						$slno=1;
							$result=mysqli_query($con,"SELECT * FROM `tblsmartkidspayment` p inner join tblsmartkidschildren c on p.`childid`=c.`childregno`
               inner join tblsmartkidsparents pa on pa.`parentid`=c.parentid 
               inner join tblsmartkidsdaycare d on d.daycareid=c.daycareid where p.`paiddate`>='$fromdate' and p.`paiddate`<='$todate'");
            if(isset($_POST['View']))
            {
							while($display=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$slno++."</td>";
		echo "<td>".$display["childname"]."</td>";
		echo "<td>".$display["age"]."</td>";
		echo "<td>".$display["parentname"]."</td>";
		
	   echo "<td>" .$display['daycarename']."</td>";
								echo "<td>" .$display['amount']."</td>";
	   echo "<td>" .$display['paiddate']."</td>";
								
								echo "</tr>";
								
							}
            }
						?>
     </table>
   </div>
 </div>
 <?php
		}
		?>
 </div>
 </div>
 </div>
 </div>
 <div></div>
 </div>
  <!-- </form> -->
</body>
 </html>
<?php
include("footer.php");
?>
