<?php
require_once "app/auth.php";
if(isset($_POST['name'])) {
    $name=$_POST['name'];
    if(!empty($name)) {
        $addquery=$db->prepare("INSERT INTO items(name,created,user) VALUES(:name, NOW(), :user)");
        $addquery->execute(['name'=>$name,'user'=>$_SESSION['user_id']]);
    }
}
header("Location:kerjain.php");
?>