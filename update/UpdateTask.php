<?php
	$msg = $_GET['msg'];
	$id = $_GET['id'];
	$time = $_GET['time'];
	if(is_null($_GET['msg']) & is_null($_GET['id']) & is_null($time)){
    echo '请输入数据';
    exit;
	}
	//包含数据库连接文件
	include('../conn.php');
	$sql = "update task set msg='$msg' , time = '$time' where task_id= '$id'";
	if(mysql_query($sql)){
    echo "success";
    exit();
} else {
    echo 'false';
}
?>
