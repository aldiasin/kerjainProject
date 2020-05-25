<?php 
date_default_timezone_set('Asia/Jakarta');
$date = getdate();
$jdate = json_encode($date);
header('Content-type: application/json; charset=utf-8');
echo $jdate;
?>