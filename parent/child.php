<?php
include('config.php');
?>
<html>
<head>
 
<title>REGISTRATION</title>
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




<h1>Registration</h1>
<form action="childaction.php" method="post">

Daycare<br />
<select name="drpdaycare">
                    <option value="">Choose...</option>
                    <?php
                    
                    $course=mysqli_query($con,"select * from tblsmartkidsdaycare");
                    while($display=mysqli_fetch_array($course)){
                    ?>
                        <option name="drpdaycare" value="<?php echo $display['daycareid'] ?>">
                        <?php echo $display['daycarename'] ?>
                    </option>
                        <?php
                        }
                        ?>
                    </select><br/>
  Child Name<br/>
  <input type="text" class="form-input" name="txtchildname" required><br />
Age<br/>
<input type="number" max='6' min='1' class="form-input" name="txtage" required><br />
Male
<input type="radio" value="Male" class="form-input" style="margin-left: -48px;
" name="txtgender"><br />
Female<input type="radio"  value="Female" class="form-input" style="margin-left: -61px;
" name="txtgender"><br />


<input type="Submit" class="form-input" name="submit" value="submit"/>
</form>



</body>
</html>