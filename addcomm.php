<?php
require_once "app/auth.php";
if(isset($_POST['comm'])) {
    $comm=$_POST['comm'];
    if(!empty($comm)) {
        $addquery=$db->prepare("INSERT INTO comm(comment,user) VALUES(:comm, :user)");
        $addquery->execute(['comm'=>$comm,'user'=>$_SESSION['user_id']]);
    }
}
header("Location:comment.php");
?>