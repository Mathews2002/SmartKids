<html>
  <head>

<style>
  .my-button
  {
    background-color: #ff0059;
    border-radius: 9px;
    padding: 8px;
    width: 54px;
    border: none;
    color: white;
    font-size: 17px;
  }
  </style>


  <script type="text/javascript">     
    function PrintDiv() {    
      alert("a")
      var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>


<style>
 {
  box-sizing: border-box;
}

@import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap");

body {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Inter", sans-serif;
  background-color: #ededed;
  margin: 0;
}

.receipt {
  background-color: #fff;
  width: 22rem;
  position: relative;
  padding: 1rem;
  box-shadow: 0 -0.4rem 1rem -0.4rem rgba(0,0,0,0.2);
}

.receipt:after {
  background-image: linear-gradient(135deg, #fff 0.5rem, transparent 0), linear-gradient(-135deg, #fff 0.5rem, transparent 0);
    background-position: left-bottom;
    background-repeat: repeat-x;
    background-size: 1rem;
    content: '';
    display: block;
    position: absolute;
    bottom: -1rem;
    left: 0;
    width: 100%;
    height: 1rem;
}

.receipt__header {
  text-align: center;
}

.receipt__title {
  color: #FF619B;
  font-size: 1.6rem;
  font-weight: 700;
  margin: 1rem 0 0.5rem;
}

.receipt__date {
  font-size: 0.8rem;
  color: #666;
  margin: 0.5rem 0 1rem;
}

.receipt__list {
  margin: 2rem 0 1rem;
  padding: 0 1rem;
}

.receipt__list-row {
  display: flex;
  justify-content: space-between;
  margin: 1rem 0;
  position: relative;
}

.receipt__list-row:after {
  content: '';
  display: block;
  border-bottom: 1px dotted rgba(0,0,0,0.15);
  width: 100%;
  height: 100%;
  position: absolute;
  top: -0.25rem;
  z-index: 1
}

.receipt__item {
  background-color: #fff;
  z-index: 2;
  padding: 0 0.15rem 0 0;
  color: #1f1f1f;
}

.receipt__cost {
  margin: 0;
  padding: 0 0 0 0.15rem;
  background-color: #fff;
  z-index: 2;
  color: #1f1f1f;
}

.receipt__list-row--total {
  border-top: 1px solid #FF619B;
  padding: 1.5rem 0 0;
  margin: 1.5rem 0 0;
  font-weight: 700;
}
</style>
</head>
<body>
<?php
session_start();
$childid=$_SESSION["childid"];
?>






<div id="divToPrint">
  




<div class="receipt">
  <header class="receipt__header">
    <p class="receipt__title">
      Smarts Kid
    </p>
    <p class="receipt__date"><?php echo date("Y-m-d");?></p>
  </header>
 <!-- <dl class="receipt__list">
    <div class="receipt__list-row">
      <dt class="receipt__item">CSS Candies</dt>
      <dd class="receipt__cost">£9.99</dd>
    </div>-->
    <div class="receipt__list-row">
      <dt class="receipt__item">Child Reg No</dt>
      <dd class="receipt__cost"><?php echo $childid;?></dd>
    </div>
    <div class="receipt__list-row">
      <dt class="receipt__item">Name</dt>
      <dd class="receipt__cost"><?php echo $_SESSION["childname"];?></dd>
    </div>
    <div class="receipt__list-row">
      <dt class="receipt__item">Installment</dt>
      <dd class="receipt__cost"><?php echo $_SESSION["duration"];?></dd>
    </div>
    <div class="receipt__list-row">
      <dt class="receipt__item">Amount</dt>
      <dd class="receipt__cost"><?php echo $_SESSION["amount"];?></dd>
    </div>
    <div class="receipt__list-row receipt__list-row--total">
      <dt class="receipt__item">Total</dt>
      <dd class="receipt__cost"><?php echo $_SESSION["amount"];?></dd>
    </div>

    
</div></br></br>
<div  style="margin: left 24px;" >
    <!-- <input type="button" value="print" onClick="PrintDiv();" /> -->
    <input type="button" class="my-button" value="print" onClick="PrintDiv();" />
    </div>
</body>

</html>