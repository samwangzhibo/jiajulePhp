<?php
	$username = $_GET['username'];
	$response = array();
	//包含数据库连接文件
	include('../conn.php');
	$sql = "select myunlock.unlock_time,myunlock.username from myunlock where myunlock.home_id=(SELECT home_id from user WHERE username= '$username') order by unlock_time asc";
	$user_query = mysql_query($sql);
	$i = 0;
	while ($row = mysql_fetch_array($user_query)) {
		$temp = array();
		$temp['unlock_time'] = $row['unlock_time'];
		$temp['username'] = $row['username'];
		$response[$i] = $temp;
		$i++;
	}
	echo json_encode($response);
?>