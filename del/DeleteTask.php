<?php
	$id = $_GET['id'];
	
	include('../conn.php');

	$sql = "delete from task where task_id = '$id'";
	if(mysql_query($sql)){
    echo "success";
} else {
    echo 'false';
}
?>