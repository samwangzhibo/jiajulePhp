<?php
	$username = $_GET['username'];
	$response = array();
	//包含数据库连接文件
	include('../conn.php');
	$sql = "select * from user where username = '$username' limit 1";
	$user_query = mysql_query($sql);
	$row = mysql_fetch_array($user_query);
 	$response["userid"] = $row['userid'];
    $response["username"] = $row['username'];
    $response["home_id"] = $row['home_id'];
    $response["phone"] = $row['phone'];

    $result = "[" . json_encode($response) . "]";
    $jsonarray =  json_decode($result);
    echo json_encode($jsonarray);
?>