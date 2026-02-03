<?php
// Connect to server and select database.
define('servername', 'localhost:3307'); //เปลี่ยน port นะครับ
//ผมเปลี่ยน พอรืตจาก default 3306 -> 3307
define('username', 'root');
define('password', '');
define('dbname', 'myhotel');
$objCon = mysqli_connect(servername, username,password,dbname);


?>
