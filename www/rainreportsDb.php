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

define('REPORTS_DB','/home/rainreports/rainreports.sqlite3');

require_once('./inc/rainreportsDb.class.php');

$pdo = new SQLitePDO(REPORTS_DB);
$pdo->myq();
$pdo->dsList();
if ($pdo->inDsList('20190113')){
    $pdo->fetchDs('20190113');
}
$pdo->inDsList('20180923');



?>
</body>
</html>
