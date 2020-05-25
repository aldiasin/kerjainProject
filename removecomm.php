<?php
require_once "app/auth.php";
if(isset($_GET['item'])) {
    $item=$_GET['item'];
    $removequery=$db->prepare("DELETE FROM comm WHERE id=:item && user=:user");
    $removequery->execute(['item'=>$item,'user'=>$_SESSION['user_id']]);
}
header("Location:comment.php");
?>