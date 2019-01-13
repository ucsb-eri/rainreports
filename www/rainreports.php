<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Rainfall Reports - Santa Barbara County">
    <title>Rainfall Reports - Santa Barbara County</title>
    <link rel="stylesheet" href="css/rainreports.css?v=1.0">
    <style>
    </style>
</head>
<body>
    <script src="js/rainreports.js"></script>
    <h1>Santa Barbara County Rainfall Reports</h1>
    <p>Harvested daily from:
        <a href="http://www.countyofsb.org/uploadedFiles/pwd/Content/Water/Documents/rainfallreport.pdf">
            http://www.countyofsb.org/uploadedFiles/pwd/Content/Water/Documents/rainfallreport.pdf</a><br />
    </p>

<?php
define('REPORTS_DIR','/home/rainreports/data/');
foreach (glob(REPORTS_DIR . 'rainfallreport*.pdf',0) as $filename){
    $file = basename($filename);
    $url="data/$file";
    print "<a href=\"$url\">$file</a><br />\n";
}

?>
</body>
</html>
