<?php
$host="111.223.52.129";
$username="iservrepor_lineoa";	// username  connect db
$pass_word="J3NnLbp4Ntw6";        //	password  connect  db
$db="iservrepor_lineoa";        //	ชื่อ  ฐานข้อมูล

// connect database
mysql_connect( $host,$username,$pass_word) or die ("ติดต่อ Mysql ไม่ได้ ");
mysql_db_query($db,"SET NAMES UTF8");
mysql_select_db($db) or die("เลือกข้อมูลไม่ได้"); 

echo "ok";
?>