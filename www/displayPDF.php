<?php

require_once('./settings.php');
//define('REPORTS_DB','/home/rainreports/rainreports.sqlite3');

require_once('./inc/rainreportsDb.class.php');
$pdo = new SQLitePDO(REPORTS_DB);
$pdo->displayPDFfromGet();
