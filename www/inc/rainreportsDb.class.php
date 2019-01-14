<?php

class SQLitePDO extends PDO {
    function __construct($filename) {
        $filename = realpath($filename);
        parent::__construct('sqlite:' . $filename);
    }
    function myq(){
        $stmt = $this->prepare('SELECT * FROM rr ORDER by ds DESC;');
        $stmt->execute();
        $hash = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // print "<pre>\n";
        // print_r($hash);
        // print "</pre>\n";

        foreach($hash as $row){
            $url = "./displayPDF.php?ds={$row['ds']}";
            print "<a href=\"$url\">{$row['ds']}</a><br />\n";
        }
    }
    function dsList(){
        $stmt = $this->prepare('SELECT ds FROM rr ORDER by ds DESC;');
        $stmt->execute();
        $hash = $stmt->fetchAll(PDO::FETCH_COLUMN);
        return $hash;
    }
    function inDsList($ds){
        $dsl = $this->dsList();
        if (in_array($ds,$dsl)){
            return True;
        }
        else {
            return False;
        }
    }
    function fetchDs($ds){
        $stmt = $this->prepare('SELECT pdfz FROM rainreports WHERE ds = ?;');
        $stmt->execute(array($ds));
        $result = $stmt->fetch(PDO::FETCH_COLUMN);
        $pdf = gzdecode($result);
        return $pdf;
        // print "<pre>\n";
        // print_r($pdf);
        // print "</pre>\n";

    }
    function displayPDFfromGet(){
        if (! isset($_GET['ds'])){
            print "GET is Not set<br />\n";
            return 0;
        }
        if ( $this->inDsList($_GET['ds'])) $this->displayPDF($_GET['ds']);
    }
    function displayPDF($ds){
        header('Content-Type: application/pdf');
        print $this->fetchDS($ds);
    }
}
?>
