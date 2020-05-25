<?php

$db_host = "sql308.epizy.com";
$db_user = "epiz_25783208";
$db_pass = "DKh8UVjLsjMY6Ip";
$db_name = "epiz_25783208_kerjain";

try {    
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    die("Terjadi masalah: " . $e->getMessage());
}
?>