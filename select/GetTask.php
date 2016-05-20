<?php
	$response = array();
	//包含数据库连接文件
	include('../conn.php');
	$sql = "select * from task";
	$user_query = mysql_query($sql);
	
	$i = 0;
	while ($row = mysql_fetch_array($user_query)) {
		$temp = array();
		$temp["id"] = $row['task_id'];
	    $temp["msg"] = $row['msg'];
	    $temp["username"] = $row['username'];
	    $temp["time"] = $row['time'];
	    $response[$i] = $temp;
	    $i++;
	}

    //$result = "[" . json_encode($response) . "]";
    //$jsonarray =  json_decode($result);
    //echo json_encode($jsonarray);

    echo json_encode($response);
?>