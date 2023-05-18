<?php
include("header.php");
  $connect = mysqli_connect("127.0.0.1","root","","smartkids");  
 $query ="SELECT daycarename ,count(childrenid) as count from tblsmartkidschildren c inner join tblsmartkidsdaycare d on c.daycareid=d.daycareid group by daycarename";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>
 <html>  
      <head>    
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['daycarename', 'count'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          { 
					echo "['".$row["daycarename"]."', ".$row["count"]."],";  
                          }  
                          ?>
                     ]);  
                var options = {  
                      title: 'Percentage ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px; margin-top:0%; margin-left:380px;">  
                <h3 align="center">Pie Chart showing the Count of Sales For Each Type</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  
</body>
</html>
<?php
include("footer.php");
?>