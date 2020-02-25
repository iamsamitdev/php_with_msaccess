<?php
$dbName = $_SERVER["DOCUMENT_ROOT"] . "\connect_msaccess\msaccessdb\demo.accdb";
// echo $dbName;
if (!file_exists($dbName)) {
    die("Could not find database file.");
}
$db = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};DBQ=$dbName; Uid=; Pwd=;");
// odbc_exec($db, "SET NAMES 'UTF8'");
// odbc_exec($db, "SET client_encoding='UTF-8'");