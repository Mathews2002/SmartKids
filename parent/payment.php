
<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="css/payment.css">
  <style>
    .my-form
    {
      background-color: #cbe2f5;
    padding: 63px;
    margin-top: 58px;
    border-radius: 10px;
    }
    </style>
</head>
<body>
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
          <div class="my-form">
              <div class="block-heading">
              <h2 style="text-align:center;">Payment Wallet</h2>
               </div></br>




               <form action="Payment\paymentaction.php" method="post">
                     <?php
                         include("config.php");
                               session_start();
                               $parentid=$_SESSION['parentid'];
                            //    $sql = mysqli_query($con, "SELECT * from tblsmartkidspayment  where parentid='$parentid'");
                            // $display = mysqli_fetch_array($sql) ;
                        
                            // $sql1 = mysqli_query($con, "SELECT sum(`totalamount`) as 'totalamount' FROM `tblcustomersales` where `customerid`='$cid'");
                            // $display1 = mysqli_fetch_array($sql1) ;
                            // $totalamount=$display1["totalamount"];
                               ?>
          <div class="card-details">
           
            <div class="row">
              <div class="form-group col-sm-7">
                <label for="card-holder">Choose Registration No</label>
               
                    <?php
                    include("config.php");
                    //$daycareid=$_SESSION['daycareid'];
                    $parentid=$_SESSION['parentid'];

                    $course=mysqli_query($con,"SELECT c.*,d.* FROM tblsmartkidschildren c inner join tblsmartkidsdaycare d on c.daycareid=d.daycareid and c.status='Accepted' and c.parentid=$parentid");
                   
                    $s="select * from tblsmartkidsfees";
                    $rr=mysqli_query($con,$s);
                    ?>
                    <select name="txtchild" id="txtchild" class="form-control" style="width: 172%;"  onchange="getchilddetails()">
                        <option>Default select</option>
                        <?php 
                         while($display=mysqli_fetch_array($course)){
                            ?>
                        <option  value="<?php echo $display['childregno'] ?>">
                        <?php echo $display['childregno'] ?></option>
                        <?php
                        }
                        ?>
                    </select>

                 </div>
              </div>
            </div>
                            <div id="childerndata">
                            </div>

        <div class="card-details">
           
           <div class="row">
             <div class="form-group col-sm-7">
               <label for="card-holder">Choose Installment</label>
                 <select name="ddlinstallment" id="ddlinstallment" class="form-control" style="width: 172%;" onchange="getchildfee()">
                        <option>Default select</option>
                        <?php 
                         while($display1=mysqli_fetch_array($rr)){
                            ?>
                        <option  value="<?php echo $display1['feesid'] ?>">
                        <?php echo $display1['duration'] ?></option>
                        <?php
                        }
                        ?>
                  </select>

               </div>
            </div>
        </div>


        


             <!-- <div class="form-group col-sm-7">
             
                <label for="card-holder">Balance Amount</label>
                <input id="card-holder" type="text" class="form-control" name="txtbalance"  aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-7">
                <label for="card-holder">Enter Amount</label>
                <input id="card-holder" type="text" class="form-control" name="txtamount" placeholder="Enter Your Amount" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>-->
                      
             
              <div class="form-group col-sm-12">
                <div class="row">
                    <div class="col-md-4">
                       <button type="submit" class="btn btn-success btn-block">Proceed</button>
                    </div>
                    <div class="col-md-4">
                       <a href="index.php"><button type="button" class="btn btn-primary btn-block">Back </button></a>
                    </div>
                </div>
                
              </div>
        

           
                 </form>
              </div>
                      </div>
          </div>             
      </div>
    </section>
  </main>
</body>






<script>
  function getchilddetails()
  {
    var val=document.getElementById('txtchild').value;
    
    $.ajax({
			type: "POST",
			url: "getchilddetails.php",
			data: "id="+val,
			
			success: function(data){

				$("#childerndata").html(data);
			}
		})
    // $ajax({
    //   type:"POST",
    //   url:"getchilddetails.php",
    //   data:"id="+val,
    //   sucess: function(data)
    //   {
    //     alert(data);
    //     $("#childerndata").html(data);
    //   }
    // })
  }
</script>

<!--getfees-->
<script>
  function getchildfee()
  {
    
    var val=document.getElementById('ddlinstallment').value;
   
    $.ajax({
			type: "POST",
			url: "getfees.php",
			data: "id="+val,
			
			success: function(data){

       
				$("#childernfee").html(data);
			}
		})
  }
  </script>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

