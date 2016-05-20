<?php
	$response = array();
	$home_id = $_GET['home_id'];
	//数据库连接文件
	include('../conn.php');
	$sql = "select * from user where home_id = '$home_id'";
	$user_query = mysql_query($sql);
	
	$i = 0;
	while($row = mysql_fetch_array($user_query)){
		$temp = array();
		$temp['username'] = $row['username'];
		$temp['phone'] = $row['phone'];
		$response[$i] = $temp;
		$i++;
	}
	echo json_encode($response);
?>
