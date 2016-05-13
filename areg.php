<?php
$username = $_GET['username'];
$pass = $_GET['pass'];
$home_id = $_GET['home_id'];
$phone = $_GET['phone'];
$userid = '10000';

include('conn.php');
//检测用户名是否已经存在
$check_query = mysql_query("select id from user where username='$username' limit 1");
if(mysql_fetch_array($check_query)){
    echo 'username is used';
    exit;
}
//写入数据
$pass = MD5($pass);
//$regdate = time();
$sql = "INSERT INTO user(id,username,pass,home_id,phone,userid)VALUES(null,'$username','$pass','$home_id',
'$phone','$userid')";
if(mysql_query($sql,$conn)){
	echo "success";
	exit;
} else {
    echo 'lose';
}
?>