<?php
include("./header.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>>smart_kid</title>
</head>

<body>
<form action="Excel/exceldaycaredetails.php" method="post">
<div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div>
  <div class="container" style="width:100%;margin-left:15%;margin-bottom: 5%;" >
  <div class="row">
  <div class="col-md-12" style=" border-radius:15px; top: 106px;  margin-left: 90px;   margin-bottom: 59px;">
  <div class="row" style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
      <input type="submit" name="addnew" value="Export" class="btn btn-primary" style="margin-left:63%">
    </div>
  <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">DAYCARE REPORT</h2>
  <div class="form-horizontal" style="margin-left:0px;">
  <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">

  <tr>
                          <th> sl. no. </th>
                          <th> Daycare  </th> 
                          <th> District </th>
                          <th> started date </th>
                          <th> Date of registration </th>
                          <th> Email </th>
                          <th> Contactno </th>
                      



                         
                          
                          
                          
                        </tr>
   
    <?php
include("config.php");
$s=1;
$sql="SELECT d.daycarename ,dd.district,d.startingdate,d.dateofregistration,d.username,d.email,d.contactno,d.head from tblsmartkidsdistrict dd INNER JOIN tblsmartkidsdaycare d ON d.districtid=dd.districtid ";
$res=mysqli_query($con,$sql);
   while($display=mysqli_fetch_array($res))
   {
    ?>
	<tr>
                          <td class="py-1"><?php echo $s++;?></td>
                          <td> <?php echo $display["daycarename"];?></td>
                          <td> <?php echo $display["district"];?></td>
                          <td> <?php echo $display["startingdate"];?></td>
                          <td> <?php echo $display["dateofregistration"];?></td>
                          <td> <?php echo $display["email"];?></td>
                          <td> <?php echo $display["contactno"];?></td>
                         
                         
                          
                          
                      </tr>
                      <?php  
	
  }
  ?>
</table>

</div>
  </div>
  </div>
  <div> </div>
  </div>
  </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>
