<?php
	$home_pass = $_GET['home_pass'];
	$username = $_GET['username'];
	include('../conn.php');
	$sql = "update myhome set home_pass = '$home_pass' where home_id = (select home_id from user where username = '$username') ";
	if (mysql_query($sql)) {
		echo "success";
	}else{
		echo "lose";
	}
?>