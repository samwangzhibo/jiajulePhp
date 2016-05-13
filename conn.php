<?php
/*****************************
连接数据库
*****************************/
header("Content-type:text/html;charset=utf-8");
$conn = @mysql_connect("localhost","root","root");
//$conn = @mysql_connect("mysql.hostinger.com.hk","u530336207_root","wzb135689");
if (!$conn){
    die("连接失败" . mysql_error());
    exit();
}
//mysql_select_db("u530336207_test", $conn);
mysql_select_db("jiajule", $conn);

mysql_query("set character set 'gbk'");

mysql_query("set names 'gbk'");
?>