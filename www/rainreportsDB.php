<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Rainfall Reports - Santa Barbara County">
    <title>Rainfall Reports - Santa Barbara County</title>
    <link rel="stylesheet" href="css/rainreports.css?v=1.1">
    <style>
    </style>
</head>
<body>
    <script src="js/rainreports.js"></script>
    <h1>Santa Barbara County Rainfall Reports</h1>

<?php
$url="http://www.countyofsb.org/pwd/water/downloads/hydro/rainfallreports/rainfallreport.pdf";
print "<p>Harvested daily from: <a href=\"$url\">$url</a><br /></p>\n";

require_once('./settings.php');
require_once('./inc/rainreportsDb.class.php');

$pdo = new SQLitePDO(REPORTS_DB);
$yearlist = $pdo->getYearList();
foreach($yearlist as $year){
    $buf .= $pdo->yearTable($year);
}

print $buf;

// $pdo->myq();
// $pdo->dsList();
//if ($pdo->inDsList('20190113')){
//    $pdo->fetchDs('20190113');
//}
//$pdo->inDsList('20180923');



?>
<p>
Alternate (FS based) version at: <a href="rainreportsFS.php">rainreportsFS.php</a>
</p>

</body>
</html>
