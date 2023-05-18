<?php
include("header.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>>smart_kid</title>
</head>

<body>
<form action="Excel/excelparentdetails.php" method="post">
<div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div>
  <div class="container" style="width:100%;margin-left:15%;margin-bottom: 5%;" >
  <div class="row">
  <div class="col-md-12" style=" border-radius:15px; top: 106px; margin-left: 75px;   margin-bottom: 59px;">
  <div class="row" style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
      <input type="submit" name="addnew" value="Export" class="btn btn-primary" style="margin-left:63%">
    </div>
  <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">PARENT REPORT</h2>
  <div class="form-horizontal" style="margin-left:0px;">
  <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">

  <tr>
                          
                          <th> Parent Name </th> 
                          <th> Email </th>
                          <th> Username </th>
                          <th> District </th>
                          <th> Place </th>
                          <th> contactno </th>
                          <th> aadharno </th>
                        
                          
                          
                          
                        </tr>
   
    <?php
include("config.php");
$s=1;
$sql="select * from tblsmartkidsparents ";
$res=mysqli_query($con,$sql);
   while($display=mysqli_fetch_array($res))
   {
    ?>
	<tr>
                          
                          <td> <?php echo $display["parentname"];?></td>
                          <td> <?php echo $display["email"];?></td>
                          <td> <?php echo $display["username"];?></td>
                          <td> <?php echo $display["district"];?></td>
                          <td> <?php echo $display["place"];?></td>
                          <td> <?php echo $display["contactno"];?></td>
                          <td> <?php echo $display["aadharno"];?></td>
                         
                         
                          
                          
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
