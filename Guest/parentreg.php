
<?php
include('config.php');
?>
<html>
<head>
  <!-- <ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul> -->
<title>PARENT REGISTRATION FORM</title>
<style>body 
{
    background-color: #243640;
    font-family: "Times New Roman", Times, serif;
     
}
h1
{
    text-align: center;
    font-family: lato, sans-serif;
    font-weight: bold; 
    text-decoration: underline;
    color:white; 
     
}
input, select
 {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    
}

input[type=submit] 
{
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover 
{
    background-color: #45a049;
}

div 
{
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

form 
{
  text-align: center;
  font-family: lato, sans-serif;
  color:white;
}
ul 
{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li 
{
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover 
{
    background-color: white;
}
.active 
{
    background-color: #4CAF50;
}
</style>
</head>
<body>




<h1>Parent Registration Details</h1>
<form action="parentaction.php" method="post">

 Parent Name<br />
  <input type="text" name="name" required><br />
  Address<br />
  <input type="text" name="address" required><br />
Email<br />
  <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="must enter a valid email address" required><br />
District<br />
<select name="drpdistrict">
                    <option value="">Choose...</option>
                    <?php
                    
                    $course=mysqli_query($con,"select * from tblsmartkidsdistrict");
                    while($display=mysqli_fetch_array($course)){
                    ?>
                        <option name=""><?php echo $display['district'] ?></option>
                        <?php
                        }
                        ?>
                    </select><br/>
                    Place<br />
  <input type="text" name="place"><br />
  Contact Number<br />
  <input type="text" name="phone" pattern="[0-9]{10}" required><br />
  Aadhar number<br />
  <input type="text" name="adharno" required><br />
                    Username<br />
  <input type="text" name="username" required><br />
   <!-- Password<br />
  <input type="text" name="password" required><br /> -->
 
 
<input type="Submit" name="submit" value="submit"/>
</form>



</body>
</html>