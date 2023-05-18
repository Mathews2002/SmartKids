<?php
include("config.php");
include("header.php");
$query ="SELECT progressgrade ,count(progressgrade) AS 'kids' FROM tblsmartkidsprogress GROUP BY progressgrade order by progressgrade";
$res =$con-> query($query);
?>
<html>
  <head>
  <style>
.rotated {
  transform: rotate(45deg); /* Equal to rotateZ(45deg) */
  background-color: pink;
}
.btn {
    padding: 8px 4px 8px 1px;
}
#btnExport {
    padding: 10px 40px;
    background:#FF0000;
    border: #499249 1px solid;
    color: #ffffff;
    font-size: 0.9em;
    cursor: pointer;
}
</style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Subcategory', 'Number of Kids'],
        <?php
		while ($row=$res->fetch_assoc())
		{
			echo "['".$row['progressgrade']."',".$row['kids']."],";
			
			
		}
		?>
        ]);

        var options = {
          title: 'Number of grades achieved',
		  is3D:true,
        };

        var chart = new google.visualization.BarChart(document.getElementById('barchart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <br><br>
 <h3 style="text-align: center">Number of Booked Items In Each Month </h3>
  <body>
 
        </div>
    <div id="barchart"  style=" alignment-adjust:central; width: 100%; height: 700px;"></div>
  </body>
</html>