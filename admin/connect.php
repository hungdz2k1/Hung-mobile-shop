<?php
// B1. Kết nối PHP với MySQL Server
$conn = mysqli_connect("localhost", "root", "", "hung_mobile_shop");

// B2. Khai báo ngôn ngữ sử dụng trong CSDL cho PHP
mysqli_query($conn, "SET NAMES 'utf8'");

?>