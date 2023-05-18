<?php
include 'excel_controller.php';
$daycare = new DBController();
$productResult = $daycare->runQuery("select c.childname,c.age,c.gender,c.parentname,d.daycarename from (select c.*,p.parentname from tblsmartkidschildren c inner join tblsmartkidsparents p on c.parentid=p.parentid) c inner join tblsmartkidsdaycare d on c.daycareid=d.daycareid where c.gender='Male'");

    $filename = "Export_malechildren_excel.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();

?>