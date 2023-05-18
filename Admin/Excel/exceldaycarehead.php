<?php
include 'excel_controller.php';
$daycare = new DBController();
$productResult = $daycare->runQuery("SELECT daycarename,head,email,username FROM `tblsmartkidsdaycare`");

    $filename = "Export_daycareheaddetails_excel.xls";
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
