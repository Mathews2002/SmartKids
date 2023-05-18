<?php
session_start();
include("config.php"); 


$id=$_SESSION["feeid"];
$childid=$_SESSION["childid"];

$sql1="select * from tblsmartkidspayment where feesid=$id and childid=$childid";
$row1=mysqli_query($con,$sql1);
$rcount=mysqli_num_rows($row1);
if($rcount==1)
{
	echo"<script>alert('Already Paid');window.location='../payment.php'</script>";
}
else{



/*$Reading_id=$_GET["Reading_id"];

$sql=mysqli_query($con,"SELECT * FROM `tblaquasoftmonthlyreading` WHERE `Reading_id`='$Reading_id'");
while($row1=mysqli_fetch_array($sql))
 {
	$amount=$row1['Amount'];
	$consumernumber=$row1['consumernumber'];
 }

 $sql=mysqli_query($con,"SELECT `consumerid` FROM `tblaquasoftnewconnection` WHERE `consumernumber`='$consumernumber'");
 while($row1=mysqli_fetch_array($sql))
  {
	 $consumerid=$row1['consumerid']; 
  }


  $sql=mysqli_query($con,"SELECT * FROM `tblaquasoftconsumer` WHERE `consumerid`='$consumerid'");
 while($row1=mysqli_fetch_array($sql))
  {
	 $consumername=$row1['consumername']; 
	 $email=$row1['email']; 
  }*/
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Payment Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<div class="main">
		<h1>Payment Form</h1>
		<div class="content">
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>PayPal</span></li> 
										  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
                                      <form action="paymentsave.php" method="post">
												<div class="tab-for">				
													<h5> Total Amount</h5>
														<input type="text" name="amount" value="<?php echo $_SESSION["fees"];?>" readonly>
												 		<!--<input type="hidden" name="Reading_id" id="Reading_id" value="<?php echo $Reading_id ?>">
												 		<input type="hidden" name="consumernumber" id="Reading_id" value="<?php echo $consumernumber ?>">
												 		<input type="hidden" name="consumerid" id="Reading_id" value="<?php echo $consumerid ?>">
													 
											
											<h3>Personal Information</h3>
											
										
												<div class="tab-for">				
													<h5>EMAIL ADDRESS</h5>
														<input type="text" name="txt_email" readonly value="">
													<h5>FIRST NAME</h5>													
														<input type="text" name="txt_name" readonly value="">
												</div>		-->	
												<!-- onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" -->
											<h3 class="pay-title">Credit Card Info</h3>
											
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="" pattern="^[A-Za_z][A-Za-z -]+$" required>
													<h5>CARD NUMBER</h5>													
			                                           <input class="pay-logo" required type="text">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
                                                          
                                                          
                                                          
                                 
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="2021" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
<input type="text" value="xxxx" required pattern="[0-9]{4}"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" >
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" name="submit" value="SUBMIT">
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="payment-info">
											<h3>Net Banking</h3>
											<div class="radio-btns">
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Andhra Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Allahabad Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank of Baroda</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Canara Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>IDBI Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Icici Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Indian Overseas Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Punjab National Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>South Indian Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>State Bank Of India</label> </div></div>		
												</div>
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>City Union Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>HDFC Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>IndusInd Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Syndicate Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Deutsche Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Corporation Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>UCO Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Indian Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Federal Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>ING Vysya Bank</label> </div></div>	
												</div>
												<div class="clear"></div>
											</div>
											<a href="#">Continue</a>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="payment-info">
											<h3>PayPal</h3>
											<h4>Already Have A PayPal Account?</h4>
											<div class="login-tab">
												<div class="user-login">
													<h2>Login</h2>
													
													
														<input type="email" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required>
														<input type="password" value="PASSWORD" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required>
															<div class="user-grids">
																<div class="user-left">
																	<div class="single-bottom">
																			<ul>
																				<li>
																					<input type="checkbox"  id="brand1" value="">
																					<label for="brand1"><span></span>Remember me?</label>
																				</li>
																			</ul>
																	</div>
																</div>
																<div class="user-right">
																	<input type="submit" value="LOGIN">
																</div>
																<div class="clear"></div>
															</div>
													</f orm>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
										<!-- value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}"-->

											<h3 class="pay-title">Dedit Card Info</h3>
											<form action="paymentaction.php" method="post">
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="" pattern="^[A-Za_z][A-Za-z -]+$" required>
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text"    required>
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required>
														
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" name="btnsubmit" value="SUBMIT">
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>	
									</div>
								</div>	
							</div>
						</div>	

		</div>
		<p class="footer">Copyright © 2016 Payment Form Widget. All Rights Reserved | Template by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	</div>
</body>
</html>
<?php
}
?>