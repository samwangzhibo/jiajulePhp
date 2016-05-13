<?php
	
$username = htmlspecialchars($_GET['username']);
$password = MD5($_GET['password']);

//包含数据库连接文件
include('conn.php');
//检测用户名及密码是否正确
$check_query = mysql_query("select id from user where username='$username' and pass='$password' 
limit 1");

if($result = mysql_fetch_array($check_query)){
    //登录成功
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['id'];
    echo "success";
    exit;
} else {
    echo "lose";
}
?>