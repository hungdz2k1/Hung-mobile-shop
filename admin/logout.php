<?php
session_start();
if(isset($_SESSION["mail"]) && isset($_SESSION["pass"])){
    unset($_SESSION["mail"]);
    unset($_SESSION["pass"]);
}
else{
    die("Bạn không có quyền truy cập vào file này !");
}
header("location: index.php");
?>