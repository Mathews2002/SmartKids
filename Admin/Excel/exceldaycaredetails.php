<?php
include 'excel_controller.php';
$daycare = new DBController();
$productResult = $daycare->runQuery("SELECT d.daycarename ,dd.district,d.startingdate,d.dateofregistration,d.username,d.email,d.contactno,d.head from tblsmartkidsdistrict dd INNER JOIN tblsmartkidsdaycare d ON d.districtid=dd.districtid ");

    $filename = "Export_daycaredetails_excel.xls";
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
