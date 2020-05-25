<?php
require_once "app/auth.php";

$data = "";
if(isset($_GET['hasil'])){
    $data = $_GET['hasil'];
}

$db = new mysqli('sql308.epizy.com','epiz_25783208_kerjain','epiz_25783208','DKh8UVjLsjMY6Ip');

if ($db->connect_error) {
    exit('tidak ditemukan database');
}

$user = $_SESSION["user_id"];

$querysearch = "SELECT name FROM items WHERE name LIKE '%$data%' AND done=0 AND user=$user LIMIT 1";
$stmt = $db->query($querysearch);

if($stmt) {
    $tampil = $stmt->fetch_assoc();
    if($tampil !== null){
        echo "<h3>".$tampil['name']."</h3>";
    } else {
        echo "<h3>Tidak ada</h3>";
    }
}
?>