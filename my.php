<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['userid'])){
    header("Location:login.html");
    exit();
}

//包含数据库连接文件
include('conn.php');
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$user_query = mysql_query("select * from user where id=$userid limit 1");
$row = mysql_fetch_array($user_query);
echo $row;
echo '用户信息：<br />';
echo '用户ID：',$userid,'<br />';
echo '用户名：',$row['userid'],'<br />';
echo '家庭号：',$row['home_id'],'<br />';
#echo '电话号码：：',date("Y-m-d", $row['regdate']),'<br />';
echo '电话号码：：',$row['phone'],'<br />';
echo '<a href="login.php?action=logout">注销</a> 登录<br />';
?>