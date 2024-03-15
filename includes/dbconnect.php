<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'library';
// Establish database connection.
try {
    $dbconn = new PDO("mysql:host=$dbhost; dbname = $dbname, $dbuser,$dbpass");
    $dbconn->exec("set names utf8");
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "success connect";
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
