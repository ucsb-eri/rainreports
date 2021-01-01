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

<?php
$url="http://www.countyofsb.org/pwd/water/downloads/hydro/rainfallreports/rainfallreport.pdf";
print "<p>Harvested daily from: <a href=\"$url\">$url</a><br /></p>\n";

define('REPORTS_DIR','/home/rainreports/data/');
foreach (glob(REPORTS_DIR . 'rainfallreport*.pdf',0) as $filename){
    $file = basename($filename);
    $url="data/$file";
    print "<a href=\"$url\">$file</a><br />\n";
}

?>
<p>
New DB based version in development at: <a href="rainreportsDb.php">rainreportsDb.php</a>
</p>
</body>
</html>
