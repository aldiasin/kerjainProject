<?php
session_start();
$db=new PDO("mysql:host=sql308.epizy.com;dbname=epiz_25783208_kerjain","epiz_25783208","DKh8UVjLsjMY6Ip");
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}
?>