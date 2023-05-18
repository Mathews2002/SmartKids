<?php

include 'excel_controller.php';
$daycare = new DBController();
$fromdate=$_SESSION["fromdate"];
$todate=$_SESSION["todate"];
$productResult = $daycare->runQuery("SELECT * FROM `tblsmartkidspayment` p inner join tblsmartkidschildren c on p.`childid`=c.`childregno`
inner join tblsmartkidsparents pa on pa.`parentid`=c.parentid 
inner join tblsmartkidsdaycare d on d.daycareid=c.daycareid where p.`paiddate`>='$fromdate' and p.`paiddate`<='$todate'");

    $filename = "Export_payment_excel.xls";
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