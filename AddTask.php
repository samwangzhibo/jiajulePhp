<?php
	$username = $_GET['username'];
	$msg = $_GET['msg'];
	$time = $_GET['time'];

	include('conn.php');
	$sql = "INSERT INTO task(task_id,msg,username,time) VALUES (null,'$msg','$username','$time')";
	if(mysql_query($sql,$conn)){
    echo "sucess";
} else {
    echo 'false';
}
?>