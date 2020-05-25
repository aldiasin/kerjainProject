<?php
require_once "app/auth.php";
if(isset($_GET['as'],$_GET['item'])) {
    $as=$_GET['as'];
    $item=$_GET['item'];
    $updatequery=$db->prepare("UPDATE items set done=$as WHERE id=:item && user=:user");
    $updatequery->execute(['item'=>$item,'user'=>$_SESSION['user_id']]);
}
header("Location:kerjain.php");
?>